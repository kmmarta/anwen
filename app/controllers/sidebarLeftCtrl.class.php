<?php

namespace app\controllers;
use core\App;
class sidebarLeftCtrl {
    public function action_koszyk() {
         
    App::getSmarty()->display("sidebarLeft.tpl");
 echo ' ja pierdole';
  }

}