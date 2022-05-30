<?php

namespace app\controllers;

use core\App;
use app\forms\EditReservationForm;
use app\utils\PaginationInfo;
use core\RoleUtils;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;

class EditReservationCtrl {

    private $form;
    private $paginationInfo;
    private $status, $page;
    private $redirectAction;
    private $id_rezerwacja;

    public function __construct() {
        $this->form = new EditReservationForm();
        $this->reservationForm = new EditReservationForm();

        if (RoleUtils::inRole('admin')) {
            $this->redirectAction = 'adminPanel';
        } else {
            $this->redirectAction = 'controlPanel';
        }
    }

    public function action_showReservations() {
        if ($this->validatePagination()) {
            $this->paginationInfo = new PaginationInfo($this->page, 4, "reservation", "status", $this->status, null, null);

            if ($this->paginationInfo->count == 0) {
                $reservations = null;
            } else {
                if ($this->page > $this->paginationInfo->max) {
                    App::getRouter()->redirectTo('showReservations/' . $this->status . '/1');
                    exit();
                }

                try {
                    $reservations = App::getDB()->select("rezerwacja", ["id_rezerwacja", "data_zlozenia"],
                            ["status" => $this->status, "LIMIT" => [$this->paginationInfo->offset, $this->paginationInfo->size],
                                "ORDER" => ["date_made" => "DESC"]]);
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
            SessionUtils::store("reservationStatus", $this->status);

            App::getSmarty()->assign('mode', "");

            App::getSmarty()->assign('reservations', $reservations);

            App::getSmarty()->assign('page', $this->page);
            App::getSmarty()->assign('prevPage', $this->paginationInfo->prevPage);
            App::getSmarty()->assign('nextPage', $this->paginationInfo->nextPage);

            App::getSmarty()->assign('max', $this->paginationInfo->max);

            App::getSmarty()->assign('reservationStatus', $this->status);
            App::getSmarty()->assign('page_title', "Lista rezerwacji");
            App::getSmarty()->display('ReservationsList.tpl');
        }
    }

    public function action_searchReservation() {
        $this->status = ParamUtils::getFromCleanURL(1);
        if (empty($this->status)) {
            App::getRouter()->redirectTo($this->redirectAction);
            exit();
        }

        $stArray = array('made', 'confirmed', 'completed', 'denied');
        if (!(in_array($this->status, $stArray))) {
            Utils::addErrorMessage('Błąd - niezgodny parametr statusu');
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo($this->redirectAction);
            exit();
        }

        $id = ParamUtils::getFromRequest("sf_reserv");

        if (empty($id) || !is_numeric($id)) {
            App::getRouter()->redirectTo('showReservations/' . $this->status . '/1');
            exit();
        }

        $page = ParamUtils::getFromCleanURL(2);
        if (empty($page) || $page < 1) {
            $page = 1;
        }
        $this->paginationInfo = new PaginationInfo($page, 1, "rezerwacja", "status", $this->status, null, null);

        if ($page > $this->paginationInfo->max) {
            App::getRouter()->redirectTo('showReservations/' . $this->status . '/1');
            exit();
        }

        try {
            $reservations = App::getDB()->select("rezerwacja", ["id_rezerwacja", "data_zlozenia"],
                    ["status" => $this->status, "id_reservation" => $id, "LIMIT" => [$this->paginationInfo->offset, $this->paginationInfo->size],
                        "ORDER" => ["date_made" => "DESC"]]);
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
        App::getSmarty()->assign('reservationStatus', $this->status);

        App::getSmarty()->assign('reservations', $reservations);

        App::getSmarty()->assign('page_title', "Lista rezerwacji");
        App::getSmarty()->display('ReservationsListTable.tpl');
    }

    public function action_showCompletedReservations() {
        $this->showUserReservations("completed");
    }

    public function action_showDeniedReservations() {
        $this->showUserReservations("denied");
    }

    public function action_searchCompletedReservation() {
        $this->searchUserReservation("completed");
    }

    public function action_searchDeniedReservation() {
        $this->searchUserReservation("denied");
    }

    public function action_showReservationDetails() {
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
            $this->reservationForm->dateMade = $record['date_made'];
            $this->reservationForm->rentalDate = $record['rental_date'];
            $this->reservationForm->returnDate = $record['return_date'];
            $this->reservationForm->pickupAddress = $record['pickup_address'];
            $this->reservationForm->status = $record['status'];
            $this->reservationForm->kwota = $record['kwota'];

            $this->reservationForm->id_osoby = $record['OSOBA_id_osoby'];
            $this->reservationForm->id_produkt = $record['PRODUKT_id_produkt'];
            $this->reservationForm->nazwa = $record['nazwa'];
            $this->reservationForm->dateConfirmed = $record['date_confirmed'];
            $this->reservationForm->id_pracownik = $record['id_pracownik'];


      

            $userData = [];
            try {
                $nazwa = App::getDB()->get("produkt", "nazwa", ["id_produkt" => $this->reservationForm->id_produkt]);
               
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



             App::getSmarty()->assign("prevPage", SessionUtils::load("currentPage", false));
            
            $userData['imie'] = SessionUtils::load("imie", true);
            $userData['nazwisko'] = SessionUtils::load("nazwisko", true);

            App::getSmarty()->assign('userData', $userData);

            App::getSmarty()->assign('reservationForm', $this->reservationForm);
            App::getSmarty()->assign('page_title', "Szczegóły rezerwacji");
            App::getSmarty()->display('ReservationDetailsUser.tpl');
        }
    }

    public function action_denyReservationShow() {
        if ($this->validateEditReservation()) {
            try {
                $carID = App::getDB()->get("rezerwacja", "PRODUKT_id_produkt", ["id_rezerwacja" => $this->form->id_rezerwacja]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas edycji danych');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
                SessionUtils::storeMessages();
                App::getRouter()->redirectTo($this->redirectAction);
                exit();
            }
        }

        $this->form->carID = $id_produkt;
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign('page_title', "Odrzuć zamówienie");
        App::getSmarty()->display('DenyReservation.tpl');
    }

    public function action_denyReservation() {
        if ($this->validateDeny()) {
            try {
                App::getDB()->update("rezerwacja", [
                    "status" => "denied",
                    "id_pracownik" => SessionUtils::load("id_osoby", true),
                    "date_confirmed" => date('Y-m-d H:i:s'),
                    "total_cost" => 0,
                    "reason" => $this->form->reason
                        ], ["id_rezerwacja" => $this->form->id_rezerwacja]);

                App::getDB()->update("produkt", ["status" => 1], ["id_produkt" => $this->form->id_produkt]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas edycji danych');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
                SessionUtils::storeMessages();
                App::getRouter()->redirectTo('controlPanel');
                exit();
            }
            Utils::addInfoMessage('Odrzucono rezerwację');
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo('controlPanel');
        }
    }

    public function action_saveReservation() {
        if ($this->validateSave()) {
            try {
                App::getDB()->update("rezerwacja", [
                    "status" => $this->form->status,
                    "id_pracownik" => SessionUtils::load("id_osoby", true),
                    "rental_date" => $this->form->rentalDate,
                    "return_date" => $this->form->returnDate,
                    "kwota" => $this->form->kwota,
                        ], ["id_rezerwacja" => $this->form->id_rezerwacja]);


                if (!empty($this->form->pickupAddress)) {
                    App::getDB()->update("reservation", [
                        "pickup_address" => $this->form->pickupAddress
                            ], ["id_rezerwacja" => $this->form->id_rezerwacja]);
                }

              
                if ($this->form->status == 'completed') {
                    App::getDB()->update("reservation", [
        
                            ], ["id_rezerwacja" => $this->form->id_rezerwacja]);
                }

                App::getDB()->update("rezerwacja", ["damage_descrp" => $this->form->damageDescrp], ["CAR_id_car" => $this->form->carID]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas edycji danych');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
                SessionUtils::storeMessages();
                App::getRouter()->redirectTo('adminPanel');
                exit();
            }
            Utils::addInfoMessage("Edytowano rezerwację");
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo('adminPanel');
        }
    }

    public function action_editReservation() {
        if ($this->validateEditReservation()) {
            try {
                $record = App::getDB()->get("rezerwacja", "*", ["id_rezerwacja" => $this->form->id_rezerwacja]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas edycji danych');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
                SessionUtils::storeMessages();
                App::getRouter()->redirectTo($this->redirectAction);
                exit();
            }

            $this->form->dateMade = $record['date_made'];
            $this->form->rentalDate = $record['rental_date'];
            $this->form->returnDate = $record['return_date'];
            $this->form->pickupAddress = $record['pickup_address'];
            $this->form->status = $record['status'];
            $this->form->kwota = $record['kwota'];
    
            $this->form->id_osoby = $record['id_osoby'];
            $this->form->id_produkt = $record['PRODUKT_id_produkt'];
            $this->form->nazwa = $record['produkt_nazwa'];
            $this->form->dateConfirmed = $record['date_confirmed'];
            $this->form->id_pracownik = $record['id_pracownik'];

            $this->form->mileageOnReturn = $record['mileage_on_return'];
            $this->form->fuelOnReturn = $record['fuel_on_return'];

            $this->form->reason = $record['reason'];



 
            try {
                $plateNum = App::getDB()->get("produkt", "nazwa", ["id_produkt" => $this->form->id_prodduktprodukt]);
                $userData = App::getDB()->get("osoba", ["imie", "nazwisko"], ["id_osoby" => $this->form->id_osoby]);
                $availableCars = App::getDB()->select("produkt", "nazwa", ["nazwa" => $nazwa, "nazwa" => $nazwa, "status" => 1]);
           
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas edycji danych');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
                SessionUtils::storeMessages();
                App::getRouter()->redirectTo($this->redirectAction);
                exit();
            }

      
            App::getSmarty()->assign('nazwa', ucfirst($nazwa));
      

            App::getSmarty()->assign('carMileage', $carMileage);
            App::getSmarty()->assign('carFuelTankCap', $carFuelTankCap);

            App::getSmarty()->assign('damageDescrp', $damageDescrp);


            App::getSmarty()->assign('userData', $userData);

            App::getSmarty()->assign("prevPage", SessionUtils::load("currentPage", false));
            App::getSmarty()->assign("reservationStatus", SessionUtils::load("reservationStatus", false));

            App::getSmarty()->assign('form', $this->form);
            App::getSmarty()->assign('page_title', "Szczegóły zamówienia");

            if (RoleUtils::inRole('admin')) {
                App::getSmarty()->display('AdminEditReservation.tpl');
                exit();
            } else {
                App::getSmarty()->display('ReservationDetails.tpl');
                exit();
            }
        }
    }

    public function action_confirmReservation() {
        if ($this->validateConfirmReservation()) {
            try {
                if (empty($this->form->pickupAddress)) {
                    App::getDB()->update("rezerwacja", [
                        "status" => "confirmed",
                        "id_osoby" => SessionUtils::load("id_osoby", true),
                        "date_confirmed" => date('Y-m-d H:i:s'),
                            ], ["id_rezerwacja" => $this->form->id_rezerwacja]);
                } else {
                    App::getDB()->update("reservation", [
                        "status" => "confirmed",
                        "id_pracownik" => SessionUtils::load("id_osoby", true),
                        "date_confirmed" => date('Y-m-d H:i:s'),
                        "pickup_address" => $this->form->pickupAddress
                            ], ["id_rezerwacja" => $this->form->id_rezerwacja]);
                }

              

              
               
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas edycji danych');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
                SessionUtils::storeMessages();
                App::getRouter()->redirectTo('controlPanel');
                exit();
            }
            Utils::addInfoMessage("Zatwierdzono rezerwację");
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo('controlPanel');
        }
    }

    public function action_endRental() {
        if ($this->validateEndRental()) {
            try {
              

              

                $kwota= App::getDB()->get("rezerwacja", "kwota", ["id_rezerwacja" => $this->form->id_rezerwacja]);


                App::getDB()->update("produkt", [
               
                    "status" => 1
                        ], ["id_produkt" => $this->form->id_produkt]);

                App::getDB()->update("rezerwacja", [
                    "status" => "completed",
                    "kwota" => $kwota,
                 
                    "employee_ID" => SessionUtils::load("id_osoby", true)
                        ], ["id_rezerwacja" => $this->form->id_rezerwacja]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
                SessionUtils::storeMessages();
                App::getRouter()->redirectTo('controlPanel');
                exit();
            }
            Utils::addInfoMessage("Zakończono wypożyczenie");
            SessionUtils::storeMessages();
            $path = 'editReservation/' . $this->form->id_rezerwacja;
            App::getRouter()->redirectTo($path);
        }
    }

    private function validateEditReservation() {
        $this->form->idReservation = ParamUtils::getFromCleanURL(1);

        if (empty($this->form->id_rezerwacja)) {
            Utils::addErrorMessage('Brak podanego numeru rezerwacji');
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo($this->redirectAction);
            exit();
        }


        try {
            $str = App::getDB()->get("rezerwacja", "data_zlozenia", ["id_rezerwacja" => $this->form->id_rezerwacja]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił nieoczekiwany błąd');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo($this->redirectAction);
            exit();
        }

        if (empty($str)) {
            Utils::addErrorMessage('Rezerwacja nie istnieje');
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo($this->redirectAction);
            exit();
        }
        return true;
    }

    private function validateConfirmReservation() {
        $paramArray = [];

        $paramArray[] = $this->form->id_rezerwacja = ParamUtils::getFromRequest("id_rezerwacja");
        $paramArray[] = $this->form->id_produkt = ParamUtils::getFromRequest("id_produkt");


     

        $this->form->defaultAddressCheckbox = ParamUtils::getFromRequest("defaultAddressCheckbox");
        if (isset($this->form->defaultAddressCheckbox)) {
            $this->form->pickupAddress = "ul. GORNA 12,41-150,SOsnowiec,Polska";
        }



        foreach ($paramArray as $p) {
            if (empty($p)) {
                Utils::addErrorMessage('Błąd - brak danych o rezerwacji');
                SessionUtils::storeMessages();
                App::getRouter()->redirectTo("controlPanel");
                exit();
            }
        }
        return true;
    }

    private function validateEndRental() {
        $this->form->id_rezerwacja = ParamUtils::getFromRequest('id_rezerwacja');
        $this->form->id_produkt = ParamUtils::getFromRequest('id_produkt');


        if (empty($this->form->id_rezerwacja) || empty($this->form->id_produkt)) {
            Utils::addErrorMessage('Błąd - brak danych');
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo('controlPanel');
            exit();
        }

        $paramArray = [];

        $paramArray[] = $this->form->currentMileage = ParamUtils::getFromRequest('currentMileage');
        $paramArray[] = $this->form->currentFuelLevel = ParamUtils::getFromRequest('currentFuelLevel');


        $empty = false;
        foreach ($paramArray as $p) {
            if (empty($p)) {
                $empty = true;
            } else {
                $empty = false;
            }
        }
        if ($empty) {
            Utils::addErrorMessage('Błąd - brak danych o rezerwacji');
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo("controlPanel");
            exit();
        }

        try {
            $str = App::getDB()->get("rezerwacja", "data_zlozenia", ["id_rezerwacja" => $this->form->id_rezerwacja]);
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

    private function validateSave() {
        $paramArray = [];

        $paramArray[] = $this->form->id_rezerwacja = ParamUtils::getFromRequest("id_rezerwacja");
        $paramArray[] = $this->form->id_produkt = ParamUtils::getFromRequest("idPprodukt");

        $paramArray[] = $this->form->status = ParamUtils::getFromRequest("status");

        $paramArray[] = $this->form->data_zlozenia = ParamUtils::getFromRequest("data_zlozenia");
        $paramArray[] = $this->form->data_zakonczenia = ParamUtils::getFromRequest("data_zakonczenia");
        $paramArray[] = $this->form->kwota = ParamUtils::getFromRequest("kwota");




        $this->form->defaultAddressCheckbox = ParamUtils::getFromRequest("defaultAddressCheckbox");
        if (isset($this->form->defaultAddressCheckbox)) {
            $this->form->pickupAddress = "ul. Olimpijska 9,40-166,Katowice,Polska";
        }

        $this->form->addressCheckbox = ParamUtils::getFromRequest("addressCheckbox");
  
        $paramArray[] = $this->form->kwota = ParamUtils::getFromRequest("kwota");



        foreach ($paramArray as $p) {
            if (empty($p)) {
                Utils::addErrorMessage('Błąd - brak danych o rezerwacji');
                SessionUtils::storeMessages();
                App::getRouter()->redirectTo("MOJEKONTO");
                exit();
            }

            return true;
        }
    }

    private function validateDeny() {
        $paramArray = [];
        $paramArray[] = $this->form->id_rezerwacja = ParamUtils::getFromRequest("id_rezerwacja");
        $paramArray[] = $this->form->id_produkt = ParamUtils::getFromRequest("id_rezerwacja");

   


        foreach ($paramArray as $p) {
            if (empty($p)) {
                Utils::addErrorMessage('Błąd - brak danych o rezerwacji');
                SessionUtils::storeMessages();
                App::getRouter()->redirectTo("controlPanel");
                exit();
            }
        }
        return true;
    }

    private function validatePagination() {
        $this->status = ParamUtils::getFromCleanURL(1);
        if (empty($this->status)) {
            App::getRouter()->redirectTo($this->redirectAction);
            exit();
        }

        $stArray = array('made', 'confirmed', 'completed', 'denied');
        if (!(in_array($this->status, $stArray))) {
            Utils::addErrorMessage('Błąd - niezgodny parametr statusu');
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo($this->redirectAction);
            exit();
        }

        $this->page = ParamUtils::getFromCleanURL(2);
        if (empty($this->page) || $this->page < 1 || !(is_numeric($this->page))) {
            $this->page = 1;
        }
        return true;
    }

    private function validateShowReservation() {
        $this->reservationForm->id_rezerwacja = ParamUtils::getFromCleanURL(1);

        if (empty($this->reservationForm->id_rezerwacja) || !is_numeric($this->reservationForm->id_rezerwacja)) {
            Utils::addErrorMessage('Brak podanego numeru rezerwacji');
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo('MOJEKONTO');
            exit();
        }


        try {
            $str = App::getDB()->get("rezerwacja", "data_zlozenia", ["id_rezerwacja" => $this->reservationForm->id_rezerwacha]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił nieoczekiwany błąd');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo('MOJEKONTO');
            exit();
        }

        if (empty($str)) {
            Utils::addErrorMessage('Rezerwacja nie istnieje');
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo('MOJEKONTO');
            exit();
        }
        return true;
    }

    private function showUserReservations($status) {
        $this->page = ParamUtils::getFromCleanURL(1);
        if (empty($this->page) || $this->page < 1 || !(is_numeric($this->page))) {
            $this->page = 1;
        }
        $userID = SessionUtils::load("id_osoby", true);
        $this->paginationInfo = new PaginationInfo($this->page, 3, "rezerwacja", "status", $status, "id_osoby", $id_osoby);

        if ($this->paginationInfo->count == 0) {
            $reservations = null;
        } else {
            if ($this->page > $this->paginationInfo->max) {
                App::getRouter()->redirectTo('showCompletedReservations/1');
                exit();
            }

            try {
                $reservations = App::getDB()->select("rezerwacja", ["id_rezerwacja", "date_zlozenia"],
                        ["status" => $status, "id_osoby" => $id_osoby, "LIMIT" => [$this->paginationInfo->offset, $this->paginationInfo->size],
                            "ORDER" => ["date_zlozenia" => "DESC"]]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
                SessionUtils::storeMessages();
                App::getRouter()->redirectTo('MOJEKONTO');
                exit();
            }
        }

        SessionUtils::store("currentPage", $this->page);

        App::getSmarty()->assign('mode', "");

        App::getSmarty()->assign('reservations', $reservations);

        App::getSmarty()->assign('page', $this->page);
        App::getSmarty()->assign('prevPage', $this->paginationInfo->prevPage);
        App::getSmarty()->assign('nextPage', $this->paginationInfo->nextPage);

        App::getSmarty()->assign('max', $this->paginationInfo->max);

        App::getSmarty()->assign('reservationStatus', $status);
        App::getSmarty()->assign('page_title', "Lista rezerwacji");
        App::getSmarty()->display('ReservationsListUser.tpl');
    }

    private function searchUserReservation($status) {
        $id = ParamUtils::getFromRequest("sf_reserv");
        $redirectAction = "show" . ucfirst($status) . "Reservations/1";

        if (empty($id) || !is_numeric($id)) {
            App::getRouter()->redirectTo($redirectAction);
            exit();
        }

        $page = ParamUtils::getFromCleanURL(1);
        if (empty($page) || $page < 1) {
            $page = 1;
        }

        $userID = SessionUtils::load("id_osoby", true);
        $this->paginationInfo = new PaginationInfo($page, 3, "rezerwacja", "status", $status, "id_osoby", $id_osoby);

        if ($page > $this->paginationInfo->max) {
            App::getRouter()->redirectTo($redirectAction);
            exit();
        }

        try {
            $reservations = App::getDB()->select("reservation", ["id_rezerwacja", "date_zlozenia"],
                    ["status" => $status, "osoba_id" => $userID, "id_rezerwacja" => $id, "LIMIT" => [$this->paginationInfo->offset, $this->paginationInfo->size],
                        "ORDER" => ["date_zlozenia" => "DESC"]]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił nieoczekiwany błąd');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo('MOJEKONTO');
            exit();
        }

        if (empty($reservations)) {
            Utils::addErrorMessage('Brak wypożyczenia o podanym numerze');
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo($redirectAction);
            exit();
        }

        App::getSmarty()->assign('mode', "searching");
        App::getSmarty()->assign('reservationStatus', $status);

        App::getSmarty()->assign('reservations', $reservations);

        App::getSmarty()->assign('page_title', "Lista rezerwacji");
        App::getSmarty()->display('ReservationsListUser.tpl');
    }

}