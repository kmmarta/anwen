<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">


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
    <div class="row">
    
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title"></h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Załóż nowe konto</h3>
							
							  <div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="{$conf->action_url}loginShow"  class="pure-menu-heading pure-menu-link"> zaloguj sie</a>
                                                        <hr>

					    <form action="{$conf->action_root}osobarejestracja" method="post" class="pure-form pure-form-aligned">
                                                
                                                            <div class="top-margin">
                                                                <label>login<span class="text-danger">*</span></label>
									<input name="login" type="text" class="form-control">
								</div>
								<div class="top-margin">
									<label>Imie</label>
									<input name="imie" type="text" class="form-control">
								</div>
								<div class="top-margin">
									<label>Nazwisko</label>
									<input name="nazwisko" type="text" class="form-control">
								</div>
								<div class="top-margin">
									<label>Email  <span class="text-danger">*</span></label>
									<input name="email" type="text" class="form-control">
								</div>

								<div class="row top-margin">
									<div class="col-sm-6">
										<label>Hasło <span class="text-danger">*</span></label>
										<input name="haslo" type="text" class="form-control">
									</div>
									<div class="col-sm-6">
										<label>Powtórz hasło <span class="text-danger">*</span></label>
										<input name powtorzhaslo type="text" class="form-control">
									</div>
								</div>

								<hr>

								<div class="row">
									<div class="col-lg-8">
										
									</div>
									<div class="col-lg-4 text-right">
										<input  class="btn btn-action" type="submit" value="Rejestruj"/>
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>
                                                  
			</article>
			<!-- /Article -->


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
								<a href="http://localhost/anwensklep/app/views/about.tpl">Dlaczego pielegnować?</a> |
								<a href="http://localhost/anwensklep/app/views/sidebarRight.TP"L>Produkty</a> |
								<a href="http://localhost/anwensklep/app/views/tajne.tpl">TAJNE</a> |
								<b><a href="http://localhost/anwensklep/app/views/LoginView.tpl">Zaloguj</a></b>
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

{if $msgs->isInfo()}
<ul>
  {foreach $msgs->getMessages() as $msg}
  <li>{$msg->text}</li>
  {/foreach}
</ul>
{/if}
 </body>

</html>

