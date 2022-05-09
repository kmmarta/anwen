<?php

namespace app\controllers;
use core\App;
class  aboutCtrl{
    public function action_about() {
         
    App::getSmarty()->display("about.tpl");
 echo ' niby glowna strona';
  }

}