<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;
use core\ParamUtils;
use app\forms\RejestracjaForm;

class rejestracjaCtrl {

    private $form;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new rejestracjaForm();
    }

    public function validate() {

        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->imie = ParamUtils::getFromRequest('imie');
        $this->form->nazwisko = ParamUtils::getFromRequest('nazwisko');
        $this->form->email = ParamUtils::getFromRequest('email');
        $this->form->haslo = ParamUtils::getFromRequest('haslo');
        $this->form->powtorzhaslo = ParamUtils::getFromRequest('powtorzhaslo');
        //nie ma sensu walidować dalej, gdy brak parametrów
        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if (empty($this->form->imie)) {
            Utils::addErrorMessage('Nie podano imiona');
        }
        if (empty($this->form->nazwisko)) {
            Utils::addErrorMessage('Nie podano nazwiska');
        }
        if (empty($this->form->email)) {
            Utils::addErrorMessage('Nie podano emaila');
        }
        if (empty($this->form->powtorzhaslo)) {
            Utils::addErrorMessage('Nie powtórzono hasła');
        }
        if (empty($this->form->haslo)) {
            Utils::addErrorMessage('Nie podano hasla');
        }
        //nie ma sensu walidować dalej, gdy brak wartości
        if (App::getMessages()->isError())
            return false;

        // sprawdzenie, czy dane logowania poprawne
        // (takie informacje najczęściej przechowuje się w bazie danych)
    }

    public function action_rejestracjashow() {
        $this->generateView();
    }

    public function action_rejestracja() {
        if ($this->validate()) {
            //zalogowany => przekieruj na główną akcję (z przekazaniem messages przez sesję)
            Utils::addErrorMessage('Poprawnie dodano do systemu');
            App::getRouter()->redirectTo("loginShow");
        } else {
            //niezalogowany => pozostań na stronie logowania
            $this->generateView();
        }
    }
//    public function action_zarejestrowano() {
//        // 1. zakończenie sesji
////        session_destroy();
//        // 2. idź na stronę główną - system automatycznie przekieruje do strony logowania
//        App::getRouter()->redirectTo('loginShow');
//    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        App::getSmarty()->display('rejestracja.tpl');
    }

    public function action_osobarejestracja() {
        // 1. walidacja id osoby do edycji
        $this->form->login = ParamUtils::getFromRequest("login");
        $this->form->haslo = ParamUtils::getFromRequest("haslo");
        $this->form->email = ParamUtils::getFromRequest("email");

        $hash = password_hash($this->form->haslo, PASSWORD_BCRYPT);
        try {
            App::getDB()->insert("osoba", [
                "login" => $this->form->login,
                "haslo" => $hash,
                "email" => $this->form->email
            ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
        try {

            $id = App::getDB()->get("osoba", "id_osoby", ["login" => $this->form->login]);
            App::getDB()->insert("role_details", [
                "Osoba_id_osoby" => $id,
                "role_id_role" => 1
            ]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
        // 3. Wygenerowanie widoku
        $this->generateView();
    }

}
