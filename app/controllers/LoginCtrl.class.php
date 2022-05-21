<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;
use core\ParamUtils;
use app\forms\LoginForm;

class LoginCtrl {

    private $form;
    private $id_osoby;
    private $imie, $nazwisko, $email;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new LoginForm();
    }

    public function validate() {

        $this->form->login = trim(ParamUtils::getFromRequest('login'));
        $this->form->haslo = ParamUtils::getFromRequest('haslo');
        if (empty($this->form->login) || empty($this->form->haslo)) {
            Utils::addErrorMessage('brak parametrów');
            SessionUtils::storeMessages();
            $this->generateView();
            exit();
        } else {

            try {
                $passHashed = App::getDB()->get("osoba",
                        "haslo",
                        ["login" => $this->form->login]
                );
                $this->id_osoby = App::getDB()->get("osoba",
                        "id_osoby",
                        ["login" => $this->form->login]
                );
                //nie ma sensu walidować dalej, gdy brak wartości
                $roleNum = App::getDB()->get("role_details", "ROLE_id_role", ["osoba_id_osoby" => $this->id_osoby]);
                $this->firstName = App::getDB()->get("osoba", "imie", ["login" => $this->form->login]);
                $this->surname = App::getDB()->get("osoba", "nazwisko", ["login" => $this->form->login]);

                $this->email = App::getDB()->get("osoba", "email", ["login" => $this->form->login]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas logowania');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
                $this->generateView();
                exit();
            }
            if (!(empty($passHashed))) {

                $verify = password_verify($this->form->haslo, $passHashed);

                if ($roleNum == 2) {
                    $role = 'pracownik';
                } else {
                    $role = 'osoba';
                }

                if ($verify) {
                    RoleUtils::addRole($role);
                } else {
                    Utils::addErrorMessage('Niepoprawny login lub hasło');
                }
            } else {
                Utils::addErrorMessage('Użytkownik nie istnieje');
            }


            return !App::getMessages()->isError();
        }
    }

    private function adminValidate() {
        $this->form->login = trim(ParamUtils::getFromRequest('login'));
        $this->form->haslo = ParamUtils::getFromRequest('haslo');
        if (empty($this->form->login) || empty($this->form->haslo)) {
            App::getRouter()->redirectTo('hello');
            exit();
        } else {



            $this->id_osoby = 3;

            try {
                $login = App::getDB()->get("osoba",
                        "login",
                        ["id_osoby" => $this->id_osoby]);
                $passHashed = App::getDB()->get("osoba",
                        "haslo",
                        ["id_osoby" => $this->id_osoby]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas logowania');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
                $this->generateView();
                exit();
            }

            if (!(empty($passHashed))) {
                $verifyPassword = password_verify($this->form->haslo, $passHashed);

                if ($verifyPassword && ($login == $this->form->login)) {
                    RoleUtils::addRole('admin');
                } else {
                    Utils::addErrorMessage('Niepoprawny login, hasło lub kod');
                }
            } else {
                Utils::addErrorMessage('Użytkownik nie istnieje');
            }
            return !App::getMessages()->isError();
        }
    }

    public function action_loginShow() {
        if (RoleUtils::inRole('osoba') || RoleUtils::inRole('admin') || RoleUtils::inRole('pracownik')) {
            Utils::addWarningMessage('Wyloguj się z obecnego konta, by zalogować się na nowe');
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo("hello");
        } else {
            $this->generateView();
        }
    }

    public function action_adminLoginShow() {
        if (RoleUtils::inRole('osoba') || RoleUtils::inRole('admin') || RoleUtils::inRole('pracownik')) {
            Utils::addWarningMessage('Wyloguj się z obecnego konta, by zalogować się na nowe');
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo("hello");
        } else {
            $this->adminGenerateView();
        }
    }

    public function action_login() {
        if (RoleUtils::inRole('osoba') || RoleUtils::inRole('admin') || RoleUtils::inRole('pracownik')) {
            App::getRouter()->redirectTo("hello");
        } else {

            if ($this->validate()) {

                Utils::addInfoMessage('Poprawnie zalogowano');
                SessionUtils::storeMessages();

                SessionUtils::store('login', $this->form->login);
                SessionUtils::store('id_osoby', $this->id_osoby);
                SessionUtils::store('email', $this->email);
                SessionUtils::store('imie', $this->imie);
                SessionUtils::store('nazwisko', $this->nazwisko);

                App::getRouter()->redirectTo('hello');
            } else {
                $this->generateView();
            }
        }
    }

    public function action_adminLogin() {
        if (RoleUtils::inRole('osoba') || RoleUtils::inRole('admin') || RoleUtils::inRole('pracownik')) {
            App::getRouter()->redirectTo("hello");
        } else {
            if ($this->adminValidate()) {

                Utils::addInfoMessage('Poprawnie zalogowano');
                SessionUtils::storeMessages();
                SessionUtils::store('login', $this->form->login);
                SessionUtils::store('id_osoby', $this->id_osoby);
                App::getRouter()->redirectTo('hello');
            } else {
                $this->adminGenerateView();
            }
        }
    }

    public function action_logout() {
        // 1. zakończenie sesji
        session_destroy();
        Utils::addInfoMessage('Wylogowano poprawnie');

        SessionUtils::storeMessages();
        App::getRouter()->redirectTo('hello');
        exit();
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        App::getSmarty()->display('LoginView.tpl');
    }

    private function adminGenerateView() {
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign('hello', "Logowanie - panel administracyjny");
        App::getSmarty()->display('tajne.tpl');
    }

    private function checkIfUserIsActive($haslo) {
        try {
            $status = App::getDB()->get('osoba', 'status', ['haslo' => $haslo]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas logowania');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
            $this->generateView();
            exit();
        }
        if ($status == 0) {
            return false;
        } else {
            return true;
        }
    }

}
