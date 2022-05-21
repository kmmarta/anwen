<?php

namespace app\controllers;

use core\App;
use core\ParamUtils;
use core\Utils;
use core\SessionUtils;

class sidebarLeftCtrl {

    private $idProduktu;

    public function action_koszykDodaj() {
        if ($this->valdiateDodaj()) {
            try {
                App::getDB()->insert("koszykPrzedmioty", [
                    "id_produktu" => $this->idProduktu,
                     "id_koszykprzedmioty" => $this->id_koszykprzedmioty,
                    "ilosc" => 1
                ]);
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas dodawania do koszyka');
                if (App::getConf()->debug) {
                    Utils::addErrorMessage($e->getMessage());
                }
                Utils::addInfoMessage("dodano");
                SessionUtils::storeMessages();
                App::getRouter()->redirectTo("produkty");
                exit();
            }
        } else {
                 App::getRouter()->redirectTo("produkty");
                 exit();
        }
        
    }

    private function valdiateDodaj() {
        $this->idProduktu = ParamUtils::getFromCleanURL(1);
        if (empty($this->idProduktu)) {
            Utils::addErrorMessage("Brak id produktu");
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo("produkty");
            exit();
        }

        return true;
    }

}
