<?php

namespace app\controllers;
use core\App;
class signinCtrl {
    public function action_signin() {
         
    App::getSmarty()->display("signin.tpl");
 echo ' ja pierdole';
  }

}