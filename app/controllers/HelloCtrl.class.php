<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class HelloCtrl {
    
    public function action_hello() {
		        
            
        App::getSmarty()->display("Hello.tpl");
        
    }
    
}
