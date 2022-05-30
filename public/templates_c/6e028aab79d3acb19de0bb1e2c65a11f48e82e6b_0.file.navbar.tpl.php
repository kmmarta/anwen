<?php
/* Smarty version 4.1.0, created on 2022-05-28 16:16:24
  from 'C:\xampp\htdocs\anwensklep\app\views\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62922eb8d2d794_80534440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e028aab79d3acb19de0bb1e2c65a11f48e82e6b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\anwensklep\\app\\views\\navbar.tpl',
      1 => 1653747383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62922eb8d2d794_80534440 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top headroom" >
    <div class="container">
        <div class="navbar-header">
            <!-- Button for smallest screens -->

        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right">
                <li class="active"><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"hello"),$_smarty_tpl ) );?>
">SKLEP </a></li>

                <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"about"),$_smarty_tpl ) );?>
">Dlaczego pielegnować?</a></li>

                <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"produkty"),$_smarty_tpl ) );?>
">PRODUKTY</a></li>
                <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"reservation"),$_smarty_tpl ) );?>
">KOSZYK</a></li>

                <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"TajneAdminPanel"),$_smarty_tpl ) );?>
">TAJNE</a></li>
                   <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"MOJEKONTO"),$_smarty_tpl ) );?>
">Moje konto</a></li>
               
                    <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
                    <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"logout"),$_smarty_tpl ) );?>
">Wylogujj się</a></li>
                    <?php } else { ?>
                    <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"loginShow"),$_smarty_tpl ) );?>
">Zaloguj się</a></li>
                <?php }?> 

            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div> 
<!-- /.navbar -->





<?php }
}
