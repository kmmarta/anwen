<<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Sklep z produktami do włosów</title>

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

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				
		</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="#">SKLEP</a></li>
                                    
                                         <li><a href="{url action="about"}">Dlaczego pielegnować?</a></li>
					
                                        <li><a href="{url action="produkty"}">PRODUKTY</a></li>
                                         <li><a href="{url action="koszyk"}">KOSZYK</a></li>
					
					<li><a href="{url action="tajne"}">TAJNE</a></li>
					<li><a href="{url action="loginShow"}">Zaloguj/ Wyloguj</a></li>
                                       
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="{url action="produkty"}">Produkty</a></li>
			<li class="active">Dlaczego pielegnować?</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-8 maincontent">
				<header class="page-header">
					<h1 class="page-title">Nadaj swoim włosom blasku</h1>
				</header>
				<h3>Korzyści pielegnacji włosów:</h3>
				<p><img src="{$conf->app_url}/assets/images/PIES.jpg" alt="" class="img-rounded pull-right" width="300" > 
				<p>Odpowiedź na to pytanie wydaje się nasuwać sama. Przecież lśniące, gęste pasma to jeden z największych atrybutów naszego wyglądu. Dobrze obcięte, zadbane włosy wpływają na pewność siebie i to, jak jest się postrzeganym przez innych. Fatalny stan włosów przekłada się na fatalne samopoczucie, nie na darmo przecież mówi się, że piękne włosy to połowa sukcesu i rzeczywiście – przy zaniedbanych, oklapniętych, przetłuszczonych włosach nawet w najlepszej kreacji nie zaprezentujemy się w odpowiedni sposób. Warto więc zadbać o fryzurę dla siebie i innych. Zdrowe kosmyki dodadzą nam pewności na randce, podczas spotkania z przyjaciółmi, w pracy, a nawet na co dzień, w domowym zaciszu. Aby pielęgnacja włosów (oraz pielęgnacja urody w ogóle) mogła nam przynieść zauważalne korzyści, wymagana jest bezwzględna systematyczność. Należy pamiętać również o tym, że pogorszenie się stanu włosów może być oznaką osłabienia organizmu lub wręcz stanu chorobowego. </p>
				
				
			</article>
			<!-- /Article -->
			
			<!-- Sidebar -->
			<aside class="col-sm-4 sidebar sidebar-right">

				<div class="widget">
					
				</div>

			</aside>
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->
	

	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>+234 23 9873237<br>
								<a href="mailto:#">some.email@somewhere.com</a><br>
								<br>
								
							</p>	
						</div>
					</div>

				

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="#">Strona główna</a> | 
								<a href="{url action="about"}">Dlaczego pielegnować?</a> |
								<a href="{url action="produkty"}">Produkty</a> |
								<a href="{url action="tajne"}">tajne</a> |
								<b><a href="{url action="loginShow"}">Zaloguj</a></b>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2014, Your name. Designed by <a href="http://gettemplate.com/" rel="designer">gettemplate</a> 
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>
	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="http://localhost/anwensklep/public/assets/js/headroom.min.js"></script>
	<script src="http://localhost/anwensklep/public/assets/js/jQuery.headroom.min.js"></script>
	<script src="http://localhost/anwensklep/public/assets/js/template.js"></script>
</body>
</html>