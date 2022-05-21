<?php
/* Smarty version 4.1.0, created on 2022-05-18 21:38:10
  from 'C:\xampp\htdocs\anwensklep\app\views\about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62854b22d5eba1_60092788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64313ee2c574c99b338128a1ea40be9502ad9d77' => 
    array (
      0 => 'C:\\xampp\\htdocs\\anwensklep\\app\\views\\about.tpl',
      1 => 1652902689,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62854b22d5eba1_60092788 (Smarty_Internal_Template $_smarty_tpl) {
?><<!DOCTYPE html>
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
	<?php echo '<script'; ?>
 src="assets/js/html5shiv.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="assets/js/respond.min.js"><?php echo '</script'; ?>
>
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
                                    
                                         <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"about"),$_smarty_tpl ) );?>
">Dlaczego pielegnować?</a></li>
					
                                        <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"produkty"),$_smarty_tpl ) );?>
">PRODUKTY</a></li>
                                         <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"koszyk"),$_smarty_tpl ) );?>
">KOSZYK</a></li>
					
					<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"tajne"),$_smarty_tpl ) );?>
">TAJNE</a></li>
					<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"loginShow"),$_smarty_tpl ) );?>
">Zaloguj/ Wyloguj</a></li>
                                       
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"produkty"),$_smarty_tpl ) );?>
">Produkty</a></li>
			<li class="active">Dlaczego pielegnować?</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-8 maincontent">
				<header class="page-header">
					<h1 class="page-title">Nadaj swoim włosom blasku</h1>
				</header>
				<h3>Korzyści pielegnacji włosów:</h3>
				<p><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/PIES.jpg" alt="" class="img-rounded pull-right" width="300" > 
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
								<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"about"),$_smarty_tpl ) );?>
">Dlaczego pielegnować?</a> |
								<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"produkty"),$_smarty_tpl ) );?>
">Produkty</a> |
								<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"tajne"),$_smarty_tpl ) );?>
">tajne</a> |
								<b><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"loginShow"),$_smarty_tpl ) );?>
">Zaloguj</a></b>
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
	<?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="http://localhost/anwensklep/public/assets/js/headroom.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="http://localhost/anwensklep/public/assets/js/jQuery.headroom.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="http://localhost/anwensklep/public/assets/js/template.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
