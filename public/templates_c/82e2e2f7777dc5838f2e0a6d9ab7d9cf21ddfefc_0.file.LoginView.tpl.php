<?php
/* Smarty version 4.1.0, created on 2022-05-08 17:01:52
  from 'C:\xampp\htdocs\anwensklep\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6277db601e74a1_82715525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82e2e2f7777dc5838f2e0a6d9ab7d9cf21ddfefc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\anwensklep\\app\\views\\LoginView.tpl',
      1 => 1652001961,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6277db601e74a1_82715525 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2070472846277db601b7532_65342178', 'top');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_2070472846277db601b7532_65342178 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_2070472846277db601b7532_65342178',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post" class="pure-form pure-form-aligned bottom-margin">
	<legend>Logowanie do systemu</legend>
	<fieldset>
           
            <div class="panel-body">
                <div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
about"  class="pure-menu-heading pure-menu-link"> Strona główna</a>
							<h3 class="thin text-center">Zaloguj sie</h3>
							
							
                                                        <div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
rejestracja"  class="pure-menu-heading pure-menu-link"> zarejestruj się</a>
	
</div><hr>
        <div class="pure-control-group">
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
"/>
		</div>
        <div class="pure-control-group">
			<label for="id_pass">haslo: </label>
			<input id="id_pass" type="password" name="pass" /><br />
		</div>
		<div class="pure-controls">
			<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
		</div>
                
                
	</fieldset>
</form>	
<?php
}
}
/* {/block 'top'} */
}
