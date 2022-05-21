<?php
/* Smarty version 4.1.0, created on 2022-05-20 16:11:41
  from 'C:\xampp\htdocs\anwensklep\app\views\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6287a19dce7276_26668481',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aaaaba52cfe2fec3233366a0040bf024b3596f74' => 
    array (
      0 => 'C:\\xampp\\htdocs\\anwensklep\\app\\views\\messages.tpl',
      1 => 1653055900,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6287a19dce7276_26668481 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<!-- Messages -->
<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
        <div class="<?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>alertError<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>alertSucces<?php }
if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>alertWarning<?php }?>">
            <span class="closebtn" onclick="this.parentElement.style.display = 'none';">&times;</span> 

            <?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>

        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
