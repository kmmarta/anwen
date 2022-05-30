<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('hello'); #default action
App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('hello', 'HelloCtrl');
//Utils::addRoute('action_name', 'controller_class_name');
Utils::addRoute('nowa', 'NowyKontroler');
//dodanie nowego kontrolera stan aplikacji:
Utils::addRoute('about', 'aboutCtrl');
//dodanie nowego kontrolera stan aplikacji
Utils::addRoute('tajne', 'TajneCtrl');
//dodanie nowego kontrolera stan aplikacj
Utils::addRoute('index', 'indexCtrl');
//dodanie nowego kontrolera stan aplikacji


Utils::addRoute('rejestracja', 'rejestracjaCtrl');
//dodanie nowego kontrolera stan aplikacji
 
//Utils::addRoute('koszyk',     'sidebarLeftCtrl'); 
Utils::addRoute('reservation',     'ReservationCtrl'); 
Utils::addRoute('produkty',     'sidebarRightCtrl'); 
//Utils::addRoute('zarejestrowano',     'LoginCtrl'); 

Utils::addRoute('osobarejestracja',    'RejestracjaCtrl');


//ble 
Utils::addRoute('adminLoginShow', 'LoginCtrl');
Utils::addRoute('adminLogin', 'LoginCtrl');
//Utils::addRoute('TajneAdminPanel', 'TajneAdminPanelCtrl', ['admin']);

//ble logow
Utils::addRoute('loginShow', 'LoginCtrl');
Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl', ['osoba', 'pracownik', 'admin']);
//



Utils::addRoute('ShowPracownicy', 'pradownicyEditCtrl', ['admin']);
Utils::addRoute('searchPracownicy', 'pracownicyEditCtrl', ['admin']);


//edycja pracownikow
Utils::addRoute('addPracownicy', 'pracownicyEditCtrl', ['admin']);
Utils::addRoute('editPracownicy', 'pracownicyEditCtrl', ['admin']);
Utils::addRoute('savePracownicy', 'PracownicyEditCtrl', ['admin']);
Utils::addRoute('deletePracownicy', 'PracownicyCtrl', ['admin']);
//moje konto
Utils::addRoute('MOJEKONTO', 'MOJEKONTOCtrl', ['osoba']);
Utils::addRoute('showReservationDetails', 'EditReservationCtrl', ['osoba']);