<?php
/* Smarty version 4.1.0, created on 2022-05-09 12:46:41
  from 'C:\xampp\htdocs\anwensklep\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6278f1111027e8_07296752',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee13871d8b719fd55a94abe3f38ded321cdeae94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\anwensklep\\app\\views\\templates\\main.tpl',
      1 => 1652093197,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6278f1111027e8_07296752 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
	<meta charset="utf-8"/>
	<title>Sklep z produktami do włosów</title>
	<link rel="shortcut icon" href="http://localhost/anwensklep/assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="http://localhost/anwensklep/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://localhost/anwensklep/assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="http://localhost/anwensklep/assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="http://localhost/anwensklep/assets/css/main.css">

</head>

<body style="margin: 20px;">

<div class="pure-menu pure-menu-horizontal bottom-margin">
	
<?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>

							
 
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

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10968780126278f1110ec233_36267992', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7194676186278f1110efa40_54002063', 'messages');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12217406206278f1111014f7_45962522', 'bottom');
?>


</body>

</html><?php }
/* {block 'top'} */
class Block_10968780126278f1110ec233_36267992 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_10968780126278f1110ec233_36267992',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'top'} */
/* {block 'messages'} */
class Block_7194676186278f1110efa40_54002063 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_7194676186278f1110efa40_54002063',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
<div class="messages bottom-margin">
	<ul>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
	<li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
</div>
<?php }?>

<?php
}
}
/* {/block 'messages'} */
/* {block 'bottom'} */
class Block_12217406206278f1111014f7_45962522 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_12217406206278f1111014f7_45962522',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'bottom'} */
}
