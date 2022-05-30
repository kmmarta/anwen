<?php

namespace app\controllers;

use core\App;
use app\forms\EditProduktForm;
use app\forms\ControlPanelForm;

use core\Utils;
use core\ParamUtils;
use core\SessionUtils;

class ControlPanelCtrl {

    private $form;
    private $passwordForm;
    private $records;
    private $reservationsMade;
    private $reservationsConfirmed;
   private $reservationsCompleted;
    private $reservationsDenied;
    private $paginationInfo;

    public function __construct() {
      
        $this->passwordForm = new ControlPanelForm();
    }

    public function action_controlPanel() {
        $subAction = ParamUtils::getFromCleanURL(1);
        switch ($subAction) {
            case 'editPassword':
                $this->editPassword();
                App::getRouter()->redirectTo('controlPanel');
                break;

            default:
                $this->generateView();
                break;
        }
    }


  

    private function checkIfExistsInDB($str, $tableName) {
        try {
            $id = App::getDB()->get("produkt", "id_produkt", [$tableName => $str]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił nieoczekiwany błąd');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo('controlPanel');
            exit();
        }
        if ($id == $this->form->idProdukt) {
            return false;
        }
        if (!empty($id)) {
            return true;
        } else {
            return false;
        }
    }

    private function generateView() {
        try {
            $this->records = App::getDB()->select("produkt", ["id_produkt", "nazwa", "kwota"]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił nieoczekiwany błąd');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo('controlPanel');
            exit();
        }




        App::getSmarty()->assign('produkt', $this->records);
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign('page_title', "Panel kontrolny");
        App::getSmarty()->display('ControlPanel.tpl');
    }

 

    private function editPassword() {
        $this->passwordForm->oldPassword = ParamUtils::getFromRequest('oldPassword');
        $this->passwordForm->password = ParamUtils::getFromRequest('haslo');

        if (empty($this->passwordForm->oldPassword) || empty($this->passwordForm->password)) {
            Utils::addErrorMessage('Błąd - brak parametrów');
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo('controlPanel');
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
                App::getRouter()->redirectTo('controlPanel');
                exit();
            }

            $verify = password_verify($this->passwordForm->oldPassword, $passHashed);

            if (!$verify) {
                Utils::addErrorMessage('Wpisane hasło nie zgadza się z obecnym hasłem');
                SessionUtils::storeMessages();
                App::getRouter()->redirectTo('controlPanel');
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
                    App::getRouter()->redirectTo('controlPanel');
                    exit();
                }
                Utils::addInfoMessage('Pomyślnie edytowano hasło.');
                SessionUtils::storeMessages();
            }
        }
    }

}