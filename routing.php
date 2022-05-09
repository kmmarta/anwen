<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('hello'); #default action
App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('hello', 'HelloCtrl');
//Utils::addRoute('action_name', 'controller_class_name');
Utils::addRoute('nowa', 'NowyKontroler');
//dodanie nowego kontrolera stan aplikacji:do dupy
Utils::addRoute('about', 'aboutCtrl');
//dodanie nowego kontrolera stan aplikacji:do dupy v2
Utils::addRoute('contact', 'contactCtrl');
//dodanie nowego kontrolera stan aplikacji:do dupy v3
Utils::addRoute('index', 'indexCtrl');
//dodanie nowego kontrolera stan aplikacji:do dupy v4

Utils::addRoute('signin', 'signinCtrl');
//dodanie nowego kontrolera stan aplikacji:do dupy v5
Utils::addRoute('rejestracja', 'rejestracjaCtrl');
//dodanie nowego kontrolera stan aplikacji:do dupy 
Utils::addRoute('loginShow',     'LoginCtrl'); 
Utils::addRoute('koszyk',     'sidebarLeftCtrl'); 
Utils::addRoute('produkty',     'sidebarRightCtrl'); 
Utils::addRoute('zarejestrowano',     'LoginCtrl'); 
Utils::addRoute('login',     'loginCtrl'); 
Utils::addRoute('osobarejestracja',    'RejestracjaCtrl'	);


