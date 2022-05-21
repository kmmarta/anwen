<?php
/* Smarty version 4.1.0, created on 2022-05-20 16:13:40
  from 'C:\xampp\htdocs\anwensklep\app\views\rejestracja.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6287a21439aa41_75041893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1cde81730fa368ed25c34ed1b0da1e76bc7fd3f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\anwensklep\\app\\views\\rejestracja.tpl',
      1 => 1653056019,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_6287a21439aa41_75041893 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
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
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
loginShow"  class="pure-menu-heading pure-menu-link"> zaloguj sie</a>
                                                        <hr>

					    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
osobarejestracja" method="post" class="pure-form pure-form-aligned">
                                                
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

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
<ul>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
  <li><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }?>
 </body>

</html>

<?php }
}
