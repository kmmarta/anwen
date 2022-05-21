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
Utils::addRoute('tajne', 'TajneCtrl');
//dodanie nowego kontrolera stan aplikacji:do dupy v3
Utils::addRoute('index', 'indexCtrl');
//dodanie nowego kontrolera stan aplikacji:do dupy v4


Utils::addRoute('rejestracja', 'rejestracjaCtrl');
//dodanie nowego kontrolera stan aplikacji:do dupy 
 
//Utils::addRoute('koszyk',     'sidebarLeftCtrl'); 
Utils::addRoute('koszykDodaj',     'sidebarLeftCtrl'); 
Utils::addRoute('produkty',     'sidebarRightCtrl'); 
//Utils::addRoute('zarejestrowano',     'LoginCtrl'); 

Utils::addRoute('osobarejestracja',    'RejestracjaCtrl');


//ble 
Utils::addRoute('adminLoginShow', 'LoginCtrl');
Utils::addRoute('adminLogin', 'LoginCtrl');

//ble logow
Utils::addRoute('loginShow', 'LoginCtrl');
Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl', ['osoba', 'pracownik', 'admin']);
//dej pan spokoj



Utils::addRoute('ShowPracownicy', 'pradownicyEditCtrl', ['admin']);
Utils::addRoute('searchPracownicy', 'pracownicyEditCtrl', ['admin']);


//edycja pracownikow
Utils::addRoute('addPracownicy', 'pracownicyEditCtrl', ['admin']);
Utils::addRoute('editPracownicy', 'pracownicyEditCtrl', ['admin']);
Utils::addRoute('savePracownicy', 'PracownicyEditCtrl', ['admin']);
Utils::addRoute('deletePracownicy', 'PracownicyCtrl', ['admin']);
