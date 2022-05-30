<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>PRODUKTY DO PIELEGNACJI WŁOSÓW</title>

	<link rel="shortcut icon" href="http://localhost/anwensklep/public/images/gt_favicon.png">
	
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
<!-- Fixed navbar -->
	{include file="navbar.tpl"}
                  



{block name=content}          


    <section class="box ">
        <header class="major">
            <h3> Panel kontrolny</h3> 
            <p></p>
        </header>


        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'reservations')"><i class="fa-solid fa-file-circle-check"></i> Rezerwacje</button>
            <button class="tablinks" onclick="openCity(event, 'produkt')"><i class="fa-solid fa-car"></i> Zestawy</button>
            <button class="tablinks" onclick="openCity(event, 'accountSettings')"><i class="fa-solid fa-gear"></i> Ustawienia konta</button>
        </div>

        <div id="reservations" class="tabcontent">
            <h3> Rezerwacje </h3>
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




        <div id="cars" class="tabcontent">
            <h3>Zestawy</h3>    
            <hr>
            <h4>Opcje:</h4>
            <button class="panelButton addButton" onclick="openForm('addProdukt')">Dodaj pojazd</button>

            <div id="addCar" style="display: none">
                <hr>
                <h3>Dodaj pojazd</h3>
                <form action="{url action="addProdukt"}" method="post">
                    <div class="row gtr-50 gtr-uniform">

                        <div class="col-6 col-12-mobilep">
                            <label for="nazwa"> Nazwa: </label>
                            <input type="text" name="nazwa" id="nazwa" value="{if isset($form->nazwa)}{$form->nazwa}{/if}" placeholder="nazwa" pattern="{literal}^[A-Za-z]{2,25}${/literal}" title="Marka musi zaczynać się od litery i musi składać się z 2-25 znaków."  required/>
                        </div>
                   </div>
               
                        <div class="col-6 col-12-mobilep">
                            <label for="kwota">Koszt :</label> 
                            <input type="text" name="kwota" id="kwota" value="{if isset($form->kwota)}{$form->kwota}{/if}" placeholder="nazwa" pattern="{literal}^[1-9][\d]{1,3}${/literal}" required/>
                        </div>
                        <div class="col-12">
                            <ul class="actions special">
                                <li><input type="submit" id="submit" value="Dodaj pojazd" /></li>
                                <li> <a class="button alt" onclick="closeForm('addCar')">Anuluj</a></li>
                            </ul>
                        </div>
                    </div>
                </form> 
            </div>
            <hr> 
            <h4><b>Lista pojazdów:</b></h4>
            <a href="{url action="showProdukt" page=1}" class="button alt">Pokaż </a>           
        </div>
        <div id="accountSettings" class="tabcontent">
            <h3>Ustawienia konta</h3>
            <form action="{url action="controlPanel" subaction="editPassword"}" method="post">
                <div class="row gtr-50 gtr-uniform">
                    <div class="col-6 col-12-mobilep">
                        Stare hasło:
                        <input type="haslo" name="oldPassword" id="oldPassword" value="" placeholder="Stare hasło" required/>  
                    </div>
                    <br>
                    <div class="col-6 col-12-mobilep">
                        Nowe hasło:
                        <input type="haslo" name="haslo" id="haslo" value="" placeholder="Nowe hasło" onkeyup='check();' onChange="onChange();" pattern="{literal}(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}{/literal}" title="Hasło powinno zawierać minimum jedną cyfrę, jedną małą i wielką literę oraz przynajmniej 8 znaków." required/>                  
                    </div>
                    <div class="col-6 col-12-mobilep">
                        Powtórz nowe hasło: 
                        <input type="haslo" name="confirm_password" id="confirm_password" value="" placeholder="Powtórz hasło" onkeyup='check();' onChange="onChange();" pattern="{literal}(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}{/literal}" required/>
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

