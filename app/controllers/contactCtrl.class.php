<?php

namespace app\controllers;
use core\App;
class  contactCtrl{
    public function action_contact() {
         
    App::getSmarty()->display("contact.tpl");
 echo ' TU KONTAKT';
  }

}