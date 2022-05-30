
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
            <h3> Moje konto</h3> 
            <p></p>
        </header>


        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'myData')"><i class="fa-solid fa-user"></i> Moje dane</button>
            <button class="tablinks" onclick="openCity(event, 'history')"><i class="fa-solid fa-clock-rotate-left"></i> Historia moich rezerwacji</button>
            <button class="tablinks" onclick="openCity(event, 'accountSettings')"><i class="fa-solid fa-gear"></i> Ustawienia konta</button>
        </div>

        <div id="myData" class="tabcontent">
            <h3>Moje dane osobowe</h3>
            <form action="{url action="MOJEKONTO" subAction="editData"}" method="post">
                <div class="row gtr-50 gtr-uniform">
                    <div class="col-6 col-12-mobilep">
                        Imię:
                        <input type="text" name="imie" id="imie" value="{if isset($userData['imie'])}{$userData['imie']}{/if}" placeholder="Imię" pattern="{literal}^[A-Za-zżźćńółęąśŻŹĆĄŚĘŁÓŃ]{2,}${/literal}" title="Imię musi zaczynać się od litery i musi składać się z minimum 2 znaków."  required/>
                    </div>
                    <div class="col-6 col-12-mobilep">
                        Nazwisko:
                        <input type="text" name="nazwisko" id="nazwisko" value="{if isset($userData['nazwisko'])}{$userData['surname']}{/if}" placeholder="Nazwisko" pattern="{literal}^[A-Za-zżźćńółęąśŻŹĆĄŚĘŁÓŃ]{2,}${/literal}" title="Nazwisko musi zaczynać się od litery i musi składać się z minimum 2 znaków." required/>
                    </div>
                  
                    <div class="col-12">
                        <ul class="actions special">
                            <li><input type="submit" id="submit" value="Edytuj dane" /></li>
                        </ul>
                    </div>
                </div>
            </form>     
        </div>
        <div id="history" class="tabcontent">
            <h3>Historia moich rezerwacji</h3>
            <hr>
            <h4><b>Oczekujące:</b></h4>
            {if !empty($reservationMade)}            
                <table class="alt">
                    <thead>
                        <tr>
                            <th>Numer</th>
                            <th>Data złożenia</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{$reservationMade['id_rezerwacja']}</td>
                            <td>{$reservationMade['date_zlozenia']}</td>
                            <td>
                                <a class="button small alt" href="{url action="showReservationDetails" id_rezerwacja= $reservationMade['id_rezerwacja']}">Szczegóły</a>
                                &nbsp;
                            </td>
                        </tr>                              
                    </tbody>
                </table>
                <hr>
            {else} <br> Brak oczekujących rezerwacji <hr>
            {/if}
            <h4><b>W trakcie:</b></h4>
            {if !empty($reservationConfirmed)}       
                <table class="alt">
                    <thead>
                        <tr>
                            <th>Numer</th>
                            <th>Data zatwierdzenia</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{$reservationConfirmed['id_rezerwacja']}</td>
                            <td>{$reservationConfirmed['date_zakonczenia']}</td>
                            <td>
                                <a class="button small alt" href="{url action="showReservationDetails" reservID= $reservationConfirmed['id_rezerwacja']}">Szczegóły</a>
                                &nbsp;
                            </td>
                        </tr>                              
                    </tbody>
                </table>
                <hr>
            {else} <br> Brak zatwierdzonych rezerwacji <hr>
            {/if}
            <h4><b>Zrealizowane:</b></h4>
             <a href="{url action="showCompletedReservations" page=1}" class="button alt">Pokaż</a>
            
            <hr>
            <h4><b>Odrzucone:</b></h4>
             <a href="{url action="showDeniedReservations" page=1}" class="button alt">Pokaż</a>     
        </div>
         
        
        
        <div id="accountSettings" class="tabcontent">
            <h3>Ustawienia konta</h3>
            <form action="{url action="MOJEKONTO" subaction="editPassword"}" method="post">
                <div class="row gtr-50 gtr-uniform">
                    <div class="col-6 col-12-mobilep">
                        Stare hasło:
                        <input type="haslo" name="oldPassword" id="oldPassword" value="" placeholder="Stare hasło" required/>
                    </div>
                    <br>
                    <div class="col-6 col-12-mobilep">
                        Nowe hasło:
                        <input type="haslo" name="haslo" id="password" value="" placeholder="Nowe hasło" onkeyup='check();' onChange="onChange()" pattern="{literal}(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}{/literal}" title="Hasło powinno zawierać minimum jedną cyfrę, jedną małą i wielką literę oraz przynajmniej 8 znaków." required/>                    </div>
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
            <hr>
            <h3>Usuń swoje konto</h3>
            <div class="alertWarning">
                <i class="fa-solid fa-circle-exclamation"></i> Usunięcie konta jest nieodwracalne. 
            </div>
            <!-- container = containerDeleteModal, modal=deleteModal, close=deleteModalClose -->
            <br>
            <form id="deleteAccountForm" action="{url action="MOJEKONTO" subaction="deleteAccount"}" method="post" onsubmit="return confirmfinish();">
                <div class="row gtr-50 gtr-uniform">
                    <div class="col-6 col-12-mobilep">
                        Aby usunąć konto, podaj swoje hasło:
                        <input type="haslo" name="haslo" id="haslo" value="" placeholder="Hasło" required/>
                    </div>
                    <div class="col-12">
                        <ul class="actions special">
                            <li><button class="myButtonError">Usuń konto</button></li>
                        </ul>
                    </div>
                    <div class="col-6 col-12-mobilep">
                    </div>
                </div>
            </form> 
            <div id="id01" class="deleteModal">
                <form class="deleteModal-content">
                    <div class="containerDeleteModal">
                        <h1>Usuwanie konta</h1>
                        <p>Czy na pewno chcesz usunąć swoje konto?</p>
                        <div class="clearfix">
                            <button type="button" class="deletebtn" onclick="confirmed = true;
                                    document.getElementById('deleteAccountForm').submit();">Tak</button>
                            <button type="button" class="cancelbtn" onclick="document.getElementById('id01').style.display = 'none';
                                    return false;">Anuluj</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="clearfix"></div>
    </section>
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="http://localhost/anwensklep/public/assets/js/headroom.min.js"></script>
    <script src="http://localhost/anwensklep/public/assets/js/jQuery.headroom.min.js"></script>
    <script src="http://localhost/anwensklep/public/assets/js/template.js"></script>
</body>
</html>

{/block}

