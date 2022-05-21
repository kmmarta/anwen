<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
	<meta charset="utf-8"/>
	<title>Sklep z produktami do włosów</title>
	<link rel="shortcut icon" href="{$conf->app_url}/assets/images/gt_favicon.png"/>
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="{$conf->app_url}/assets/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="{$conf->app_url}/assets/css/font-awesome.min.css"/>

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="{$conf->app_url}/assets/css/bootstrap-theme.css" media="screen"/>
	<link rel="stylesheet" href="{$conf->app_url}/assets/css/main.css" />  

</head>

<body style="margin: 20px;">

<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
                            </div><div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="#">SKLEP</a></li>
                                         <li><a href="{url action="about"}">Dlaczego pielegnować?</a></li>
					
                                        <li><a href="{url action="produkty"}">PRODUKTY</a></li>
                                         <li><a href="{url action="koszyk"}">KOSZYK</a></li>
					
					<li><a href="{url action="tajne"}">TAJNE</a></li>
					<li><a href="{url action="loginShow"}">Zaloguj/ Wyloguj</a></li>
                                       
				</ul>
			</div>
                </div>
                                         <!-- Main -->
            <section id="main" class="container">


                <!-- Messages -->
                {include file='messages.tpl'}



                {block name=content} Domyślna treść zawartości .... {/block}

            </section>
	
{if count($conf->roles)>0}
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
								<a href="http://localhost/anwensklep/app/views/sidebarRight.tpl">Produkty</a> |
								<a href="http://localhost/anwensklep/app/views/contact.tpl">Kontaktt</a> |
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
		

							
 
 <a href="{$conf->action_root}about" class="pure-menu-heading pure-menu-link">Sklep</a>
 <a href="{$conf->action_root}Produkty" class="pure-menu-heading pure-menu-link">Produkty</a>
  <a href="{$conf->action_root}koszyk" class="pure-menu-heading pure-menu-link">koszyk</a>
 <a href="{$conf->action_root}rejestracja" class="pure-menu-heading pure-menu-link">Zarejestruj sie</a>	
 <a href="{$conf->action_root}loginShow" class="pure-menu-heading pure-menu-link">Zaloguj</a>
{else}	
	
        
       
       
{/if}
</div>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="{$conf->app_url}/assets/js/headroom.min.js"></script>
	<script src="{$conf->app_url}/assets/js/jQuery.headroom.min.js"></script>
	<script src="{$conf->app_url}/assets/js/template.js"></script>

</body>

</html>