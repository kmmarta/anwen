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
	{include file="navbar.tpl"}
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
	


	{include file="footer.tpl"}
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="http://localhost/anwensklep/public/assets/js/headroom.min.js"></script>
	<script src="http://localhost/anwensklep/public/assets/js/jQuery.headroom.min.js"></script>
	<script src="http://localhost/anwensklep/public/assets/js/template.js"></script>
</body>
</html>