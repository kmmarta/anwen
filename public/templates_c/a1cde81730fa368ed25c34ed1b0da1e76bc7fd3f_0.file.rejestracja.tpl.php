<?php
/* Smarty version 4.1.0, created on 2022-05-09 19:02:32
  from 'C:\xampp\htdocs\anwensklep\app\views\rejestracja.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_627949284c9779_63039370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1cde81730fa368ed25c34ed1b0da1e76bc7fd3f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\anwensklep\\app\\views\\rejestracja.tpl',
      1 => 1652115744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627949284c9779_63039370 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
 <meta charset="utf-8"/>
 <title>Rejestracja| Anwen framework</title>
</head>

<body>
    <div class="row">
    
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Rejestracja</h1>
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
										<input type="text" class="form-control">
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
