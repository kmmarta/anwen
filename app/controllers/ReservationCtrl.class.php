<?php

namespace app\controllers;

use core\App;
use core\ParamUtils;
use core\Utils;
use core\SessionUtils;
use app\forms\ReservationForm;

class ReservationCtrl {

    private $form;
  
    private $nazwa;

    public function __construct() {
        $this->form = new ReservationForm();
    }

    public function action_reservation() {
        if ($this->validateReservation()) {
            try {
                $kwota = App::getDB()->get("produkt", "kwota", ["nazwa" => $this->form->nazwa]);



                $earlier = new DateTime($this->form->data_zlozenia);
                $later = new DateTime($this->form->data_zakonczenia);

                $abs_diff = $earlier->diff($later)->format("%a");

                $totalCost = $kwota* ($abs_diff + 1);

                if (isset($this->form->addressCheckbox)) {
                    App::getDB()->insert("rezerwacja", [
                   
                        "data_zlozenia" => $this->form->data_zlozenia,
                        "data_zakonczenia" => $this->form->data_zakonczenia,
                    
                        "status" => "koszyk",
                        "kwota" => $kwota,
                        "id_osoby" => SessionUtils::load('id_sooby', true),
                       
                        "PRODUKT_id_produkt" => $this->form->id_produkt,
                        "produkt_nazwa" => $this->nazwa
                    ]);
                } else {
                    App::getDB()->insert("rezerwacja", [
                        "date_made" => date('Y-m-d H:i:s'),
                        "data_zlozenia" => $this->form->data_zlozenia,
                        "data_zakonczenia" => $this->form->data_zakonczenia
                            
                            
                            ,
                        "status" => "koszyk",
                        "koszyk" => $kwota,
                        "id_osoby" => SessionUtils::load('id_osoby', true),
                        "PRODUKT_id_produkt" => $this->form->id_produkt,
                        "produkt_nazwa" => $this->nazwa
                    ]);
                }

                App::getDB()->update("produkt", ["status" => "koszyk"], ["id_produkt" => $this->form->id_produkt]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas rezerwacji');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
                SessionUtils::storeMessages();
                App::getRouter()->redirectTo('about');
                exit();
            }
            Utils::addInfoMessage("Zamówienie zostało przyjęte do realizacji. Szczegóły w \"Moje konto\"");
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo('about');
        }
    }

    private function validateReservation() {
        $paramArray = [];
        $paramArray[] = $produkt = ParamUtils::getFromCleanURL(1);
        $paramArray[] = $this->form->data_zlozenia = ParamUtils::getFromRequest('data_zlozenia');
        $paramArray[] = $this->form->data_zakonczenia = ParamUtils::getFromRequest('data_zakonczenia');

        $this->form->addressCheckbox = ParamUtils::getFromRequest('addressCheckbox');

    

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
            App::getRouter()->redirectTo("hello");
            exit();
        }

        try {
            $id = App::getDB()->get("rezerwacja", "id_rezerwacja", ["id_osoby" => SessionUtils::load("id_osoby", true), "status[!]" => ["w realizacji", "zamowione","wysłane","odebrane"]]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas rezerwacji');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo('hello');
            exit();
        }

        if (!empty($id)) {
            Utils::addErrorMessage('Możesz rezerwować tylko jeden zestaw jednocześnie');
            SessionUtils::storeMessages();
            $this->generateView();
            exit();
        }

        $this->ProduktName = $produkt;
        $this->form->nazwa = ucfirst(substr($produkt, 0, strpos($produkt, "-")));
       

        try {
            $this->form->ProduktID = App::getDB()->get("produkt", "id_produkt", [ "nazwa" => $this->form->nazwa, "LIMIT" => 1]);
            $id = App::getDB()->get("produkt", "id_produkt", [ "nazwa" => $this->form->nazwa]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas rezerwacji');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo('hello');
            exit();
        }


        

        return true;
    }

    public function action_reservationShow() {
        $this->generateView();
    }

    private function generateView() {

        if (empty(SessionUtils::load('imie', true)) || empty(SessionUtils::load('nazwisko', true)) ) {
            Utils::addWarningMessage("Uzupełnij swoje dane, by móc kontynuować wypożyczenie");
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo('MOJEKONTO');
            exit();
        }

        App::getSmarty()->assign('imie', SessionUtils::load('imie', true));
        App::getSmarty()->assign('nazwisko', SessionUtils::load('nazwisko', true));

        App::getSmarty()->assign('email', SessionUtils::load('email', true));


        $produkt = ParamUtils::getFromCleanURL(1);
        $nazwa= ucfirst(substr($produkt, 0, strpos($produkt, "-")));
     


        App::getSmarty()->assign('produkt', $produkt);
        App::getSmarty()->assign('nazwa', $nazwa);
      


        try {
            $price = App::getDB()->get("produkt", "kwota", ["nazwa" => $nazwa]);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas rezerwacji');
            if (App::getConf()->debug) {
                Utils::addErrorMessage($e->getMessage());
            }
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo('about');
            exit();
        }

        App::getSmarty()->assign('kwota', $kwota);

        App::getSmarty()->assign('page_title', "REZERWACJA");
        App::getSmarty()->display('SidebarLeftView.tpl');
    }

}
