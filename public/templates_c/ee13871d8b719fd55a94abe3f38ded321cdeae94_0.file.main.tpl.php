<?php
/* Smarty version 4.1.0, created on 2022-05-16 11:59:47
  from 'C:\xampp\htdocs\anwensklep\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628220939b12a2_41668996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee13871d8b719fd55a94abe3f38ded321cdeae94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\anwensklep\\app\\views\\templates\\main.tpl',
      1 => 1652695182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_628220939b12a2_41668996 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
	<meta charset="utf-8"/>
	<title>Sklep z produktami do włosów</title>
	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/gt_favicon.png"/>
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/font-awesome.min.css"/>

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/bootstrap-theme.css" media="screen"/>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />  

</head>

<body style="margin: 20px;">

<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
                            </div><div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="#">SKLEP</a></li>
                                         <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"about"),$_smarty_tpl ) );?>
">Dlaczego pielegnować?</a></li>
					
                                        <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"produkty"),$_smarty_tpl ) );?>
">PRODUKTY</a></li>
                                         <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"koszyk"),$_smarty_tpl ) );?>
">KOSZYK</a></li>
					
					<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"contact"),$_smarty_tpl ) );?>
">KONTAKT</a></li>
					<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"loginShow"),$_smarty_tpl ) );?>
">Zaloguj/ Wyloguj</a></li>
                                       
				</ul>
			</div>
                </div>
                                         <!-- Main -->
            <section id="main" class="container">


                <!-- Messages -->
                <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5501964746282209398f1a6_25846106', 'content');
?>


            </section>
	
<?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
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
		

							
 
 <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
about" class="pure-menu-heading pure-menu-link">Sklep</a>
 <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Produkty" class="pure-menu-heading pure-menu-link">Produkty</a>
  <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
koszyk" class="pure-menu-heading pure-menu-link">koszyk</a>
 <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
rejestracja" class="pure-menu-heading pure-menu-link">Zarejestruj sie</a>	
 <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginShow" class="pure-menu-heading pure-menu-link">Zaloguj</a>
<?php } else { ?>	
	
        
       
       
<?php }?>
</div>



<?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/headroom.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jQuery.headroom.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/template.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
/* {block 'content'} */
class Block_5501964746282209398f1a6_25846106 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5501964746282209398f1a6_25846106',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
