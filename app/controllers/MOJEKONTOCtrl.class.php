<?php

namespace app\controllers;

use core\App;
use app\forms\MOJEKONTOForm;
use app\forms\EdRezerwacjaForm;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;

class MOJEKONTOCtrl {

    private $form;
    private $login;
    private $id_osoby;
    private $reservationsMade;
    private $reservationsConfirmed;
    private $reservationsCompleted;
    private $reservationsDenied;

    public function __construct() {
        $this->form = new MOJEKONTOForm();
        $this->reservationForm = new EdRezerwacjaForm();

        $this->login = SessionUtils::load('login', true);
        $this->userID = SessionUtils::load('id_osoby', true);
    }

    public function action_MOJEKONTO() {
        $subAction = ParamUtils::getFromCleanURL(1);
        switch ($subAction) {
            case 'editData':
                $this->editUserData();
                App::getRouter()->redirectTo('MOJEKONTO');
                break;
            case 'editPassword':
                $this->editPassword();
                App::getRouter()->redirectTo('MOJEKONTO');
                break;
            case 'deleteAccount':
                $this->deleteAccount();
                break;

            case 'showReservationDetails':
                $this->showReservationDetails();
                break;

            default:
                $this->generateView();
                break;
        }
    }

    private function editUserData() {
        $this->form->imie = trim(ParamUtils::getFromRequest('imie'));
        $this->form->nazwisko = trim(ParamUtils::getFromRequest('nazwisko'));
      

        if (empty($this->form->imie) || empty($this->form->nazwisko) ) {
            Utils::addErrorMessage('Błąd - brak parametrów');
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo('MOJEKONTO');
            exit();
        } else {

            try {
                App::getDB()->update("osoba", [
                    "imie" => $this->form->imie,
                    "nazwisko" => $this->form->nazwisko,
                  
                
                        ], ["login" => $this->login]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas edycji danych');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
                SessionUtils::storeMessages();
                App::getRouter()->redirectTo('MOJEKONTO');
                exit();
            }
            Utils::addInfoMessage('Pomyślnie edytowano dane.');
            SessionUtils::storeMessages();

            SessionUtils::store('imie', $this->form->imie);
            SessionUtils::store('nazwisko', $this->form->nazwisko);
      
        }
    }

    private function editPassword() {
        $this->form->oldPassword = ParamUtils::getFromRequest('oldPassword');
        $this->form->haslo = ParamUtils::getFromRequest('haslo');

        if (empty($this->form->oldPassword) || empty($this->form->haslo)) {
            Utils::addErrorMessage('Błąd - brak parametrów');
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo('MOJEKONTO');
            exit();
        } else {

            try {
                $passHashed = App::getDB()->get("osoba",
                        "haslo",
                        ["login" => $this->login]
                );
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas edycji hasła');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
                SessionUtils::storeMessages();
                App::getRouter()->redirectTo('MOJEKONTO');
                exit();
            }

            $verify = password_verify($this->form->oldPassword, $passHashed);

            if (!$verify) {
                Utils::addErrorMessage('Wpisane hasło nie zgadza się z obecnym hasłem');
                SessionUtils::storeMessages();
                App::getRouter()->redirectTo('MOJEKONTO');
                exit();
            } else {
                $hash = password_hash($this->form->haslo, PASSWORD_BCRYPT);

                try {
                    App::getDB()->update("osoba", [
                        "haslo" => $hash,
                 
                            ], ["login" => $this->login]);
                } catch (\PDOException $e) {
                    Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas edycji hasła');
                    if (App::getConf()->debug) {
                        Utils::addErrorMessage($e->getMessage());
                    }
                    SessionUtils::storeMessages();
                    App::getRouter()->redirectTo('MOJEKONTO');
                    exit();
                }
                Utils::addInfoMessage('Pomyślnie edytowano hasło.');
                SessionUtils::storeMessages();
            }
        }
    }

    private function deleteAccount() {
        $this->form->password = ParamUtils::getFromRequest('haslo');

        if (empty($this->form->password)) {
            Utils::addErrorMessage('Błąd - brak parametrów');
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo('MOJEKONTO');
            exit();
        } else {
            try {
                $passHashed = App::getDB()->get("osoba",
                        "haslo",
                        ["login" => $this->login]
                );
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas usuwania konta');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
                SessionUtils::storeMessages();
                App::getRouter()->redirectTo('MOJEKONTO');
                exit();
            }

            $verify = password_verify($this->form->haslo, $passHashed);

            if (!$verify) {
                Utils::addErrorMessage('Wpisane hasło nie zgadza się z obecnym hasłem');
                SessionUtils::storeMessages();
                App::getRouter()->redirectTo('MOJEKONTO');
                exit();
            } else {
                try {
                    App::getDB()->delete("role_details",
                            ["OSOBA_id_osoby" => $this->id_osoby]);
                    App::getDB()->delete("user",
                            ["id_osoby" => $this->id_osoby]);
                } catch (\PDOException $e) {
                    Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas usuwania konta');
                    if (App::getConf()->debug) {
                        Utils::addErrorMessage($e->getMessage());
                    }
                    SessionUtils::storeMessages();
                    App::getRouter()->redirectTo('MOJEKONTO');
                    exit();
                }
                session_destroy();
                App::getRouter()->redirectTo('about/accountDeleted');
            }
        }
    }

    private function generateView() {
        try {
            $userData = App::getDB()->get("OSOBA", ["imie", "nazwisko"], ["login" => $this->login]);
            $this->reservationMade = App::getDB()->get("rezerwacja", ["id_rezerwacja", "data_zlozenia"], ["status" => "zlozone", "id_osoby" => $this->id_osoby]);
            $this->reservationConfirmed = App::getDB()->get("rezerwacja", ["id_rezerwacja", "data_zakonczenia"], ["status" => "wyslane", "id_osoby" => $this->id_osoby]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił nieoczekiwany błąd');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo('MOJEKONTO');
            exit();
        }




        App::getSmarty()->assign('reservationMade', $this->reservationMade);
        App::getSmarty()->assign('reservationConfirmed', $this->reservationConfirmed);
        App::getSmarty()->assign('userData', $userData);
        App::getSmarty()->display('MOJEKONTO.tpl');
    }

    private function showReservationDetails() {
        if ($this->validateShowReservation()) {
            try {
                $record = App::getDB()->get("rezerwacja", "*", ["id_rezerwacja" => $this->reservationForm->id_rezerwacja]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas edycji danych');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
                SessionUtils::storeMessages();
                App::getRouter()->redirectTo('MOJEKONTO');
                exit();
            }

            if ($record['id_osoby'] != SessionUtils::load("id_osoby", true)) {
                Utils::addErrorMessage('Nie możesz wyświetlać cudzych zamówień');
                SessionUtils::storeMessages();
                App::getRouter()->redirectTo('MOJEKONTO');
                exit();
            }
         
            $this->reservationForm->data_zlozenia = $record['data_zlozenia'];
            $this->reservationForm->data_zakonczenia = $record['data_zakonczenia'];
            $this->reservationForm->pickupAddress = $record['pickup_address'];
            $this->reservationForm->status = $record['status'];
            $this->reservationForm->kwota = $record['kwota'];
            $this->reservationForm->totalMileage = $record['total_mileage'];
            $this->reservationForm->id_osoby = $record['id_osoby'];
            $this->reservationForm->id_produkt = $record['PRODUKT_id_produkt'];
            $this->reservationForm->ProduktNazwa = $record['produkt_nazwa'];
            $this->reservationForm->dateConfirmed = $record['date_confirmed'];
            $this->reservationForm->employeeID = $record['id_pracownik'];

            $this->reservationForm->mileageOnReturn = $record['mileage_on_return'];
            $this->reservationForm->fuelOnReturn = $record['fuel_on_return'];

            $this->reservationForm->reason = $record['reason'];
            
            $damageDescrp = $record['damage_descrp'];

            $produkt = $this->reservationForm->nazwa;
            $nazwa= ucfirst(substr($produkt, 0, strpos($produkt, "-")));
          

            $userData = [];
            try {
                $produkt = App::getDB()->get("produkt", "nazwa", ["id_produkt" => $this->reservationForm->id_produkt]);
                $carFuelTankCap = App::getDB()->get("produkt", "nazwa", ["id_produkt" => $this->reservationForm->id_produkt]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
                SessionUtils::storeMessages();
                App::getRouter()->redirectTo('MOJEKONTO');
                exit();
            }


            App::getSmarty()->assign('nazwa', ucfirst($nazwa));
        

       

            App::getSmarty()->assign('damageDescrp', $damageDescrp);

            $userData['imie'] = SessionUtils::load("imie", true);
            $userData['nazwisko'] = SessionUtils::load("nazwisko", true);
            
            App::getSmarty()->assign('userData', $userData);

            App::getSmarty()->assign('reservationForm', $this->reservationForm);
            App::getSmarty()->assign('page_title', "Szczegóły rezerwacji");
            App::getSmarty()->display('ReservationDetailsUser.tpl');
        }
    }

    private function validateShowReservation() {
        $this->reservationForm->id_rezerwacja = ParamUtils::getFromCleanURL(2);

        if (empty($this->reservationForm->idReservation)) {
            Utils::addErrorMessage('Brak podanego numeru rezerwacji');
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo('controlPanel');
            exit();
        }


        try {
            $str = App::getDB()->get("rezerwacja", "data_zlozenia", ["id_rezerwacja" => $this->reservationForm->id_rezerwacja]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił nieoczekiwany błąd');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo('controlPanel');
            exit();
        }

        if (empty($str)) {
            Utils::addErrorMessage('Rezerwacja nie istnieje');
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo('controlPanel');
            exit();
        }
        return true;
    }

}