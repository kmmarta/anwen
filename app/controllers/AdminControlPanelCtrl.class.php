<?php

namespace app\controllers;

use core\App;
use app\forms\PracownicyEditForm;
use app\forms\ControlPanelForm;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;

class AdminPanelCtrl {

    private $form;

    private $pracownik = [];

    public function __construct() {
        $this->passwordForm = new ControlPanelForm();
    }

    public function action_adminPanel() {
        $subAction = ParamUtils::getFromCleanURL(1);
        switch ($subAction) {
            case 'editPassword':
                $this->editPassword();
                App::getRouter()->redirectTo('adminPanel');
                break;
            default:
                $this->generateView();
                break;
        }
    }

    private function editPassword() {
        $this->passwordForm->oldPassword = ParamUtils::getFromRequest('oldPassword');
        $this->passwordForm->haslo = ParamUtils::getFromRequest('haslo');

        if (empty($this->passwordForm->oldPassword) || empty($this->passwordForm->password)) {
            Utils::addErrorMessage('Błąd - brak parametrów');
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo('adminPanel');
            exit();
        } else {

            try {
                $passHashed = App::getDB()->get("osoba",
                        "haslo",
                        ["login" => SessionUtils::load("login", true)]
                );
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas edycji hasła');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
                SessionUtils::storeMessages();
                App::getRouter()->redirectTo('adminPanel');
                exit();
            }

            $verify = password_verify($this->passwordForm->oldPassword, $passHashed);

            if (!$verify) {
                Utils::addErrorMessage('Wpisane hasło nie zgadza się z obecnym hasłem');
                SessionUtils::storeMessages();
                App::getRouter()->redirectTo('adminPanel');
                exit();
            } else {
                $hash = password_hash($this->passwordForm->haslo, PASSWORD_BCRYPT);

                try {
                    App::getDB()->update("osoba", [
                        "haslo" => $hash,
                        "who_modified" => SessionUtils::load("id_osoby", true)
                            ], ["login" => SessionUtils::load("login", true)]);
                } catch (\PDOException $e) {
                    Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas edycji hasła');
                    if (App::getConf()->debug) {
                        Utils::addErrorMessage($e->getMessage());
                    }
                    SessionUtils::storeMessages();
                    App::getRouter()->redirectTo('adminPanel');
                    exit();
                }
                Utils::addInfoMessage('Pomyślnie edytowano hasło.');
                SessionUtils::storeMessages();
            }
        }
    }

    private function generateView() {
        App::getSmarty()->assign('page_title', "Panel administracyjny");
        App::getSmarty()->display('AdminPanel.tpl');
    }

}