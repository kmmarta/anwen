<?php

namespace app\controllers;
use core\App;
class  indexCtrl{
    public function action_index() {
         
    App::getSmarty()->display("index.tpl");
 echo ' niby widoczek';
  }

}
