<?php
/* Smarty version 4.1.0, created on 2022-05-22 11:06:22
  from 'C:\xampp\htdocs\anwensklep\app\views\about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6289fd0eea7b90_87412632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64313ee2c574c99b338128a1ea40be9502ad9d77' => 
    array (
      0 => 'C:\\xampp\\htdocs\\anwensklep\\app\\views\\about.tpl',
      1 => 1653210378,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6289fd0eea7b90_87412632 (Smarty_Internal_Template $_smarty_tpl) {
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
	<?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
	


	<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		




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
