<?php
/* Smarty version 4.1.0, created on 2022-05-20 16:10:19
  from 'C:\xampp\htdocs\anwensklep\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6287a14b5d2406_13203510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82e2e2f7777dc5838f2e0a6d9ab7d9cf21ddfefc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\anwensklep\\app\\views\\LoginView.tpl',
      1 => 1653055815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
    'file:messages.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6287a14b5d2406_13203510 (Smarty_Internal_Template $_smarty_tpl) {
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
        	<link rel="stylesheet" href="http://localhost/anwensklep/public/assets/css/style.css">


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
        <?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        
                        
                        
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post" class="pure-form pure-form-aligned bottom-margin">
            <legend>Logowanie do systemu</legend>
                        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="thin text-center">Zaloguj sie</h3>
                        <p class="text-center text-muted">Jeśli jesteś nowy <a href ="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"rejestracja"),$_smarty_tpl ) );?>
">zarejestruj się</a> aby nabyć produkty </p>
                        <hr>

                        <form>
                            <input type="text" name="login" id="login" value="<?php if ((isset($_smarty_tpl->tpl_vars['form']->value->login))) {
echo $_smarty_tpl->tpl_vars['form']->value->login;
}?>" placeholder="Login" required/>
                    </div>
                    <div class="col-6 col-12-mobilep">
                        <input type="haslo" name="haslo" id="haslo" value="" placeholder="Hasło" required/>
                    </div>

                    <hr>

                    <div class="row">

                        <div class="col-lg-4 text-right">
                            <button class="btn btn-action" type="submit">Zaloguj się</button>
                        </div>
                    </div>
                    </form>
                </div>
               
                    <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>

        </div>
    </form>


    <section class="special">

        Nie masz konta? <a href ="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"rejestracjashow"),$_smarty_tpl ) );?>
"> Zarejestruj się </a> <br>

    </section>

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
</html>



<?php }
}
