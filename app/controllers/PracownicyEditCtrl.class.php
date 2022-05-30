<?php

namespace app\controllers;

use core\App;
use app\forms\PracownicyEditForm;
use app\utils\PaginationInfo;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;

class PracownicyEditCtrl {

    private $pracownik;
    private $page;

    public function __construct() {
        $this->form = new PracownikEditForm();
    }

    public function action_showPracownik() {
        if ($this->validatePagination()) {

            $this->paginationInfo = new PaginationInfo($this->page, 3, "role_details", "ROLE_id_role", 2, null, null);

            if ($this->paginationInfo->count == 0) {
                $this->pracownik = null;
            } else {
                if ($this->page > $this->paginationInfo->max) {
                    App::getRouter()->redirectTo('showPracownik/1');
                    exit();
                }

                try {
                    $ids = App::getDB()->select("role_details", [
                        "OSOBA_id_osoby"], ["ROLE_id_role" => 2, "LIMIT" => [$this->paginationInfo->offset, $this->paginationInfo->size]]);
                    foreach ($ids as $id) {
                        $this->pracownik[] = App::getDB()->get("osoba", [
                            "id_osoby", "imie", "nazwisko"], ["id_osoby" => $id]);
                    }
                } catch (\PDOException $e) {
                    Utils::addErrorMessage('Wystąpił nieoczekiwany błąd');
                    if (App::getConf()->debug) {
                        Utils::addErrorMessage($e->getMessage());
                    }
                    SessionUtils::storeMessages();
                    App::getRouter()->redirectTo($this->redirectAction);
                    exit();
                }
            }


            SessionUtils::store("currentPage", $this->page);

            App::getSmarty()->assign('mode', "");

            App::getSmarty()->assign('pracownik', $this->pracownik);

            App::getSmarty()->assign('page', $this->page);
            App::getSmarty()->assign('prevPage', $this->paginationInfo->prevPage);
            App::getSmarty()->assign('nextPage', $this->paginationInfo->nextPage);

            App::getSmarty()->assign('max', $this->paginationInfo->max);

            App::getSmarty()->assign('page_title', "Lista pracowników");
            App::getSmarty()->display('PracownikList.tpl');
        }
    }

    public function action_searchPracownik() {
        $id = ParamUtils::getFromRequest("sf_id_pracownik");

        if (empty($id) || !is_numeric($id)) {
            App::getRouter()->redirectTo('showPracownik/1');
            exit();
        }

        $page = ParamUtils::getFromCleanURL(1);
        if (empty($page) || $page < 1) {
            $page = 1;
        }
        $this->paginationInfo = new PaginationInfo($this->page, 1, "role_details", "ROLE_id_role", 2, null, null);

        if ($page > $this->paginationInfo->max) {
            App::getRouter()->redirectTo('showPracownik/1');
            exit();
        }

        try {
            $empID = App::getDB()->get("role_details", [
                "OSOBA_id_osoby"], ["ROLE_id_role" => 2, "OSOBA_id_osoby" => $id, "LIMIT" => [$this->paginationInfo->offset, $this->paginationInfo->size]]);
            $employees = App::getDB()->select("user", [
                "id_osoba", "IMIE", "nazwisko"], ["id_osoby" => $empID]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił nieoczekiwany błąd');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo($this->redirectAction);
            exit();
        }

        App::getSmarty()->assign('mode', "searching");

        App::getSmarty()->assign('pracownik', $pracownik);

        App::getSmarty()->assign('page_title', "Lista pracowników");
        App::getSmarty()->display('PPracownikListTable.tpl');
    }

    public function action_editPracownik() {
        if ($this->validate()) {
            try {
                $record = App::getDB()->get("osoba", [
                    "id_osoby", "imie", "surname", "email"], ["id_osoby" => $this->form->id_pracownik]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas rejestracji');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
                SessionUtils::storeMessages();
                App::getRouter()->redirectTo('adminPanel');
                exit();
            }


            $this->form->id_pracownik = $record['id_osoby'];
            $this->form->imie = $record['imie'];
            $this->form->nazwisko = $record['nazwisko'];
            $this->form->email = $record['email'];
    

            App::getSmarty()->assign("prevPage", SessionUtils::load("currentPage", false));
            App::getSmarty()->assign('form', $this->form);
            App::getSmarty()->assign('page_title', "Edytuj pracownika");
            App::getSmarty()->display('AdminPracownikEditView.tpl');
        }
    }

    public function action_savePracownik() {
        if ($this->validateSave()) {
            try {
                App::getDB()->update("osoba", [
                    "imie" => $this->form->imie,
                    "nazwisko" => $this->form->nazwisko,
                   
                    "email" => $this->form->email,
                    "who_modified" => SessionUtils::load("id_osoby", true)
                        ], ["id_osoby" => $this->form->id_pracownik]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas edycji danych');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
                SessionUtils::storeMessages();
                App::getRouter()->redirectTo('adminPanel');
                exit();
            }
            Utils::addInfoMessage('Pomyślnie edytowano dane');
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo('adminPanel');
            exit();
        }
    }

    public function action_deletePracownik() {
        if ($this->validate()) {
            try {
                App::getDB()->delete("role_details", ["OSOBA_id_osoby" => $this->form->id_pracownik]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas usuwania pracownika');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
                SessionUtils::storeMessages();
                App::getRouter()->redirectTo('adminPanel');
                exit();
            }
            try {
                App::getDB()->delete("osoba", ["id_osoby" => $this->form->id_pracownik]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas usuwania pracownika');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
                SessionUtils::storeMessages();
                App::getRouter()->redirectTo('adminPanel');
                exit();
            }
            Utils::addInfoMessage("Pomyślnie usunięto pracownika");
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo('adminPanel');
            exit();
        }
    }

    public function action_addPracownik() {
        $this->form->imie = trim(ParamUtils::getFromRequest('imie'));
        $this->form->nazwisko = trim(ParamUtils::getFromRequest('nazwisko'));

        $this->form->email = ParamUtils::getFromRequest('email');

        if (empty($this->form->imie) || empty($this->form->nazwisko) || empty($this->form->email)) {
            Utils::addErrorMessage('Błąd - brak parametrów');
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo('adminPanel');
            exit();
        } else {

            if ($this->checkIfExistsInDB($this->form->email, 'email')) {
                Utils::addErrorMessage('Podany e-mail jest już zajęty!');
                $this->generateView();
                exit();
            }


            try {
                App::getDB()->insert("osoba", [
                    "imie" => $this->form->imie,
                    "nazwisko" => $this->form->nazwisko,
                 
                    "email" => $this->form->email,
                    "who_modified" => SessionUtils::load("id_osoby", true),
                 
              
                ]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas rejestracji');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
                SessionUtils::storeMessages();
                App::getRouter()->redirectTo('adminPanel');
                exit();
            }

      
        }
    }


    private function validate() {
        $this->form->id_pracownik = ParamUtils::getFromCleanURL(1);

        if (empty($this->form->employeeID)) {
            Utils::addErrorMessage('Brak podanego ID pracownika');
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo('adminPanel');
            exit();
        }

        try {
            $str = App::getDB()->get("osoba", "login", ["id_osoby" => $this->form->id_pracownik]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił nieoczekiwany błąd');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo('adminPanel');
            exit();
        }

        if (empty($str)) {
            Utils::addErrorMessage('Pracownik nie istnieje');
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo('adminPanel');
            exit();
        }
        return true;
    }

    private function validateSave() {
        if ($this->validate()) {
            $paramArray = [];
            $paramArray[] = $this->form->imie = trim(ParamUtils::getFromRequest('imie'));
            $paramArray[] = $this->form->nazwisko = trim(ParamUtils::getFromRequest('nazwisko'));
        
            $paramArray[] = $this->form->email = trim(ParamUtils::getFromRequest('email'));


            $empty = false;
            foreach ($paramArray as $p) {
                if (empty($p)) {
                    $empty = true;
                } else {
                    $empty = false;
                }
            }
            if ($empty) {
                Utils::addErrorMessage('Błąd - brak danych o pracowniku');
                SessionUtils::storeMessages();
                App::getRouter()->redirectTo("adminPanel");
                exit();
            }
            return true;
        }
    }

    private function checkIfExistsInDB($str, $tableName) {
        try {
            $id = App::getDB()->get("osoba", "id_osoby", [$tableName => $str]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił nieoczekiwany błąd');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo('adminPanel');
            exit();
        }
        if (!empty($id)) {
            return true;
        } else {
            return false;
        }
    }

 

    private function validatePagination() {
        $this->page = ParamUtils::getFromCleanURL(1);
        if (empty($this->page) || $this->page < 1 || !(is_numeric($this->page))) {
            $this->page = 1;
        }
        return true;
    }

}