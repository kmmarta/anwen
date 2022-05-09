<?php
/* Smarty version 4.1.0, created on 2022-05-06 20:40:05
  from 'C:\xampp\htdocs\anwensklep\app\views\sidebarRight.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62756b85a92256_59500322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3cc52b4b1b683b77e8660ee987741a67f8183e5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\anwensklep\\app\\views\\sidebarRight.tpl',
      1 => 1651862359,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62756b85a92256_59500322 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
 <meta charset="utf-8"/>
 <title>Produkty | Anwen framework</title>
</head>

<body>
<h3>Generowanie adresów (z użyciem obiektu konfiguracji)</h3>
 
Link bezwzględny do strony akcji hello: <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
produkty"> link </a>
<br/>
Link względny do strony akcji hello: <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
produkty"> link </a>
<br/>

<h3>Adresy można również generować w Amelii za pomocą dedykowanych funkcji url oraz rel_url:</h3>

Link bezwzględny do strony akcji hello: <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>'produkty'),$_smarty_tpl ) );?>
"> link </a>
<br/>
Link względny do strony akcji hello: <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>'produkty'),$_smarty_tpl ) );?>
"> link </a>
<br/>

Wyświetlenie listy komunikatów:

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
