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


	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<!-- Fixed navbar -->
	{include file="navbar.tpl"}
        {block name=content}          


    <section class="box">
        <header class="major">
            <h3>Zarezerwuj zestaw</h3> 
            <p><b>{$nazwa} </b></p>
        </header>


        <section class="box special">
            <div class="rowCheckout">
                <div class="col-75">
                    <div class="containerCheckout">
                        <form action="{url action="rezerwacja" produkt=$ProduktName}" method="post">

                            <div class="rowCheckout">
                                <div class="col-50">
                                    <h3><i class="fa fa-user"></i> Moje dane</h3>
                                    Imię: <b>{if isset($imie)}{$imie}{/if}</b><br>
                                    Nazwisko: <b>{if isset($nazwisko)}{$nazwisko}{/if}</b><br>
                                    E-mail: <b>{if isset($email)}{$email}{/if}</b><br>
                             
                                   

                                    <hr>

                                    <h3><i class="fa-solid fa-map-location"></i> Adres odbioru</h3>
                                    <h4> Domyślny adres odbioru: <br>
                                        <u>ul. Olimpijska 9, 40-166 Katowice, Polska</u></h4> 
                                    <p> (siedziba firmy)</p> 

                                    <input id="addressCheckbox" name="addressCheckbox" type="checkbox" onclick="validateCheckbox()" />
                                    <label for="addressCheckbox">Chcę odebrać zestaw pod innym adresem</label>    

               
                                    <div class="col-50">
                                        <hr>
                                        <h3>Okres wypożyczenia</h3>                   
                                        <label for="dateStart">Wybierz datę rozpoczęcia:</label>          
                                        <input type="date" id="dateStart" name="dateStart" min="{"+2 days"|date_format: "%Y-%m-%d"}" onchange='adjustDate(); showCost()' required>
                                        <label for="dateEnd">Wybierz datę zakończenia :</label>          
                                        <input type="date" id="dateEnd" name="dateEnd" min="{"+3 days"|date_format: "%Y-%m-%d"}"  max="" onchange='showCost();' required>                                    
                                     <input type="hidden" name="kwota" id="kwota" value="{$kwota}">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <span id='totalCost'></span><br>
                            <input type="submit" value="Zarezerwuj" class="button primary">
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </section>
{/block}
</html>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="http://localhost/anwensklep/public/assets/js/headroom.min.js"></script>
    <script src="http://localhost/anwensklep/public/assets/js/jQuery.headroom.min.js"></script>
    <script src="http://localhost/anwensklep/public/assets/js/template.js"></script>
</body>
</html>
