<?php

namespace app\controllers;
use core\App;
class sidebarRightCtrl {
    public function action_produkty() {
         
    App::getSmarty()->display("sidebarRight.tpl");

  }

}