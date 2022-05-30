<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Sklep z produktami do włosów</title>

	<link rel="shortcut icon" href="http://localhost/anwensklep/public/assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="http://localhost/anwensklep/public/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://localhost/anwensklep/public/assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="http://localhost/anwensklep/public/assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="http://localhost/anwensklep/public/assets/css/main.css">
	<link rel="stylesheet" href="http://localhost/anwensklep/public/assets/css/style.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="home">
	<!-- Fixed navbar -->
	{include file="navbar.tpl"}
	<!-- /.navbar -->
        
{block name=content}          


    <section class="box ">
        <header class="major">
            <h3> Panel administracyjny</h3> 
            <p></p>
        </header>


        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'pracownik')"><i class="fa-solid fa-user"></i> Pracownicy</button>
            <button class="tablinks" onclick="openCity(event, 'produkt')"><i class="fa-solid fa-car"></i> Zestawy</button>
            <button class="tablinks" onclick="openCity(event, 'reservations')"><i class="fa-solid fa-file-circle-check"></i> Rezerwacje</button>
            <button class="tablinks" onclick="openCity(event, 'accountSettings')"><i class="fa-solid fa-gear"></i> Ustawienia konta</button>
        </div>

        <div id="employees" class="tabcontent">
            <h3>Pracownicy</h3>    
            <hr>
            <h4>Opcje:</h4>
            <button class="panelButton addButton" onclick="openForm('addForm')">Dodaj pracownika</button>

            <div class ="form-popup" id="addForm" style="display: none">
                <hr>
                <h3>Dodaj pracownika</h3>
                <form action="{url action="addPracownik"}" method="post">
                    <div class="row gtr-50 gtr-uniform">

                        <div class="col-6 col-12-mobilep">
                            Imię:
                            <input type="text" name="imie" id="imie" value="{if isset($form->imie)}{$form->imie}{/if}" placeholder="Imię" pattern="{literal}^[A-Za-zżźćńółęąśŻŹĆĄŚĘŁÓŃ]{2,}${/literal}" title="Imię musi zaczynać się od litery i musi składać się z minimum 2 znaków."  required/>
                        </div>
                        <div class="col-6 col-12-mobilep">
                            Nazwisko:
                            <input type="text" name="nazwisko" id="nazwisko" value="{if isset($form->nazwisko)}{$form->nazwisko}{/if}" placeholder="Nazwisko" pattern="{literal}^[A-Za-zżźćńółęąśŻŹĆĄŚĘŁÓŃ]{2,}${/literal}" title="Nazwisko musi zaczynać się od litery i musi składać się z minimum 2 znaków." required/>
                        </div>
                     
                        <div class="col-6 col-12-mobilep">
                            E-mail: 
                            <input type="email" name="email" id="email" value="{if isset($form->email)}{$form->email}{/if}" placeholder="E-mail" pattern="{literal}^[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}${/literal}" required/>
                        </div>
                        <div class="col-12">
                            <ul class="actions special">
                                <li><input type="submit" id="submit" value="Dodaj" /></li>
                                <li> <a class="button alt" onclick="closeForm('addForm')">Anuluj</a></li>
                            </ul>
                        </div>
                    </div>
                </form> 
            </div>
            <hr>
            <h4><b>Lista pracowników:</b></h4>
            <a href="{url action="showPracownik" page=1}" class="button alt">Pokaż </a>  
        </div>
        <div id="cars" class="tabcontent">
            <h3>Pojazdy</h3>    
            <hr>
            <h4>Opcje:</h4>
            <button class="panelButton addButton" onclick="openForm('addCar')">Dodaj produkt</button>
            <div id="addProdukt" style="display: none">
                <hr>
                <h3>Dodaj pojazd</h3>
                <form action="{url action="addCar"}" method="post">
                    <div class="row gtr-50 gtr-uniform">
                        <div class="col-6 col-12-mobilep">
                            <label for="nazwa"> Nazwa: </label>
                            <input type="text" name="nazwa" id="nazwa" value="{if isset($form->nazwa)}{$form->nazwa}{/if}" placeholder="Nazwa" pattern="{literal}^[A-Za-z]{2,25}${/literal}" title="Marka musi zaczynać się od litery i musi składać się z 2-25 znaków."  required/>
                        </div>
                 
                        <div class="col-6 col-12-mobilep">
                            <label for="kwota">Koszt :</label> 
                            <input type="text" name="kwota" id="kwota" value="{if isset($form->kwota)}{$form->kwota}{/if}" placeholder="kwota" pattern="{literal}^[1-9][\d]{1,3}${/literal}" required/>
                        </div>
                        <div class="col-12">
                            <ul class="actions special">
                                <li><input type="submit" id="submit" value="Dodaj produkt" /></li>
                                <li> <a class="button alt" onclick="closeForm('addProdukt')">Anuluj</a></li>
                            </ul>
                        </div>
                    </div>
                </form> 
            </div>
            <hr> 
            <h4><b>Lista pojazdów:</b></h4>
            <a href="{url action="showProdukt" page=1}" class="button alt">Pokaż </a>  
        </div>
        <div id="reservations" class="tabcontent">
            <h3> Rezerwacje i wypożyczenia</h3>
            <hr>
            <ul class="actions special">
                <li><a href="{url action="showReservations" status="made" page=1}" class="button alt">Pokaż oczekujące</a></li>
                <li><a href="{url action="showReservations" status="confirmed" page=1}" class="button alt">Pokaż zatwierdzone</a></li>                
            </ul>
            <ul class="actions special">
           <li><a href="{url action="showReservations" status="completed" page=1}" class="button alt">Pokaż zrealizowane</a></li>
                <li><a href="{url action="showReservations" status="denied" page=1}" class="button alt">Pokaż odrzucone</a></li>          
            </ul>
        </div>
        <div id="accountSettings" class="tabcontent">
            <h3>Ustawienia konta</h3>
            <form action="{url action="adminPanel" subaction="editPassword"}" method="post">
                <div class="row gtr-50 gtr-uniform">
                    <div class="col-6 col-12-mobilep">
                        Stare hasło:
                        <input type="haslo" name="oldPassword" id="oldPassword" value="" placeholder="Stare hasło" required/>
                    </div>
                    <br>
                    <div class="col-6 col-12-mobilep">
                        Nowe hasło:
                        <input type="haslo" name="haslo" id="password" value="" placeholder="Nowe hasło" onkeyup='check();' onChange="onChange();" pattern="{literal}(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}{/literal}" title="Hasło powinno zawierać minimum jedną cyfrę, jedną małą i wielką literę oraz przynajmniej 8 znaków." required/>                    </div>
                    <div class="col-6 col-12-mobilep">
                        Powtórz nowe hasło: 
                        <input type="haslo" name="confirm_password" id="confirm_password" value="" placeholder="Powtórz hasło" onkeyup='check();' onChange="onChange()" pattern="{literal}(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}{/literal}" required/>
                        <span id='messageMatch'></span> 
                    </div>
                    <div id="messagePass">
                        <h3>Nowe hasło powinno zawierać:</h3>
                        <p id="letter" class="invalid"> Minimum jedną małą literę </p>
                        <p id="capital" class="invalid">Minimum jedną wielką literę</p>
                        <p id="number" class="invalid">Minimum jedną cyfrę</p>
                        <p id="length" class="invalid">Minimum 8 znaków</p>
                    </div>
                    <div class="col-12">
                        <ul class="actions special">
                            <li><input type="submit" id="submit" value="Zmień hasło" /></li>
                        </ul>
                    </div>
                </div>
            </form> 
        </div>
        <div class="clearfix"></div>
    </section>
{/block}
