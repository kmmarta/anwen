<?php
/* Smarty version 4.1.0, created on 2022-05-27 17:04:59
  from 'C:\xampp\htdocs\anwensklep\app\views\sidebarRight.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6290e89b3dda50_25222569',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3cc52b4b1b683b77e8660ee987741a67f8183e5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\anwensklep\\app\\views\\sidebarRight.tpl',
      1 => 1653663893,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6290e89b3dda50_25222569 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport"    content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">

        <title>DODATKI DO PIELEGNACJI</title>

        <link rel="shortcut icon" href="http://localhost/anwensklep/public/assets/images/gt_favicon.png">

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
        <!-- Fixed navbar -->
        <div class="navbar navbar-inverse navbar-fixed-top headroom" >
            <div class="container">
                <div class="navbar-header">
                    <!-- Button for smallest screens -->

                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav pull-right">
                        <li class="active"><a href="#">SKLEP</a></li>

                        <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"about"),$_smarty_tpl ) );?>
">Dlaczego pielegnować?</a></li>

                        <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"produkty"),$_smarty_tpl ) );?>
">PRODUKTY</a></li>
                        <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"koszyk"),$_smarty_tpl ) );?>
">REZERWACJA</a></li>

                        <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"tajne"),$_smarty_tpl ) );?>
">TAJNE</a></li>
                        <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"loginShow"),$_smarty_tpl ) );?>
">Zaloguj/ Wyloguj</a></li>

                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div> 
        <!-- /.navbar -->

        <header id="head" class="secondary"></header>

        <!-- container -->
        <div class="container">
            <?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <ol class="breadcrumb">
                <li><a href="http://localhost/anwensklep/app/views/index.tpl">Sklep</a></li>
                <li class="active">ZESTAWY</li>
            </ol>

            <div class="product-sec1">
                <!--/mens-->

                <div class="col-md-4 product-men">
                    <div class="product-shoe-info shoe">
                        <div class="men-pro-item">
                            <div class="men-thumb-item">

                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"reservation",'id_produkt'=>1),$_smarty_tpl ) );?>
" class="link-product-add-cart">ZAREZERWUJ</a>
                                    </div>

                                </div>

                            </div>
                            <div class="item-info-product">
                                <h4>
                                    <a href="http://localhost/anwensklep/app/views/sidebarLeft.tpl">ZESTAW ODŻYWEK DO WŁOSÓW WYSOKOPOROWATYCH </a>
                                </h4>
                                <div class="info-product-price">
                                    <div class="grid_meta">
                                        <div class="product_price">
                                            <div class="grid-price ">
                                                <span class="money ">CENA:80.00zł</span>
                                                <p><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/wysoko.jpg" alt="" class="img-rounded pull-right" width="300" > 
                                            </div>

                                        </div>

                                    </div>
         
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 product-men">
                    <div class="product-shoe-info shoe">
                        <div class="men-pro-item">
                            <div class="men-thumb-item">

                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"reservation",'id_produkt'=>2),$_smarty_tpl ) );?>
" class="link-product-add-cart">ZAREZERWUJ</a>
                                    </div>
                                </div>

                            </div>
                            <div class="item-info-product">
                                <h4>
                                    <a href="http://localhost/anwensklep/app/views/sidebarLeft.tpl">ZESTAW ODŻYWEK DO WŁOSÓW ŚREDNIOPOROWATYCH </a>
                                </h4>
                                <div class="info-product-price">
                                    <div class="grid_meta">
                                        <div class="product_price">
                                            <div class="grid-price ">
                                                <span class="money ">CENA:80.00zł</span>
                                                <p><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/srednioodzywki.jpg" alt="" class="img-rounded pull-right" width="300" > 
                                            </div>
                                        </div>

                                    </div>
                 
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
               <div class="col-md-4 product-men">
                    <div class="product-shoe-info shoe">
                        <div class="men-pro-item">
                            <div class="men-thumb-item">

                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                       <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"reservation",'id_produkt'=>3),$_smarty_tpl ) );?>
" class="link-product-add-cart">ZAREZERWUJ</a>
                                    </div>
                                </div>

                            </div>
                            <div class="item-info-product">
                                <h4>
                                    <a href="http://localhost/anwensklep/app/views/sidebarLeft.tpl">ZESTAW ODŻYWEK DO WŁOSÓW NISKOPOROWATYCH </a>
                                </h4>
                                <div class="info-product-price">
                                    <div class="grid_meta">
                                        <div class="product_price">
                                            <div class="grid-price ">
                                                <span class="money ">CENA:80.00zł</span>
                                                <p><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/niskoodzywki.jpg" alt="" class="img-rounded pull-right" width="300" > 
                                            </div>
                                        </div>

                                    </div>
                 
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                                            <div class="col-md-4 product-men">
                    <div class="product-shoe-info shoe">
                        <div class="men-pro-item">
                            <div class="men-thumb-item">

                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"reservation",'id_produkt'=>4),$_smarty_tpl ) );?>
" class="link-product-add-cart">ZAREZERWUJ</a>
                                    </div>
                                </div>

                            </div>
                            <div class="item-info-product">
                                <h4>
                                    <a href="http://localhost/anwensklep/app/views/sidebarLeft.tpl">ZESTAW  DO WŁOSÓW POROSTU WŁOSÓW </a>
                                </h4>
                                <div class="info-product-price">
                                    <div class="grid_meta">
                                        <div class="product_price">
                                            <div class="grid-price ">
                                                <span class="money ">CENA:75.00zł</span>
                                                <p><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/porostzestaw.jpg" alt="" class="img-rounded pull-right" width="300" > 
                                            </div>
                                        </div>

                                    </div>
                 
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
<div class="col-md-4 product-men">
                    <div class="product-shoe-info shoe">
                        <div class="men-pro-item">
                            <div class="men-thumb-item">

                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                      <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"reservation",'id_produkt'=>5),$_smarty_tpl ) );?>
" class="link-product-add-cart">ZAREZERWUJ</a>
                                    </div>
                                </div>

                            </div>
                            <div class="item-info-product">
                                <h4>
                                    <a href="http://localhost/anwensklep/app/views/sidebarLeft.tpl">ZESTAW ODŻYWEK DO PIELEGNACJI SKÓRY GŁOWY </a>
                                </h4>
                                <div class="info-product-price">
                                    <div class="grid_meta">
                                        <div class="product_price">
                                            <div class="grid-price ">
                                                <span class="money "> CENA:75.00zł</span>
                                                <p><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/pielegnacjaskory.jpg" alt="" class="img-rounded pull-right" width="300" > 
                                            </div>
                                        </div>

                                    </div>
                 
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                                            <div class="col-md-4 product-men">
                    <div class="product-shoe-info shoe">
                        <div class="men-pro-item">
                            <div class="men-thumb-item">

                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                       <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"reservation",'id_produkt'=>6),$_smarty_tpl ) );?>
" class="link-product-add-cart">ZAREZERWUJ</a>
                                    </div>
                                </div>

                            </div>
                            <div class="item-info-product">
                                <h4>
                                    <a href="http://localhost/anwensklep/app/views/sidebarLeft.tpl">ZESTAW ODŻYWEK DO WŁOSÓW BLOND </a>
                                </h4>
                                <div class="info-product-price">
                                    <div class="grid_meta">
                                        <div class="product_price">
                                            <div class="grid-price ">
                                                <span class="money ">CENA:95.00zł</span>
                                                <p><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/zestawblond.jpg" alt="" class="img-rounded pull-right" width="300" > 
                                            </div>
                                        </div>

                                    </div>
                 
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                                             </div>
                                             </div>
        <!-- /Article -->

        <!-- Sidebar -->
        <aside class="col-md-4 sidebar sidebar-right">



            <div class="row widget">
                <div class="col-xs-12">

                    <p><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/TEKILA.jpg" alt="" class="img-rounded pull-right" width="250" > 
                </div>
            </div>


        </aside>
        <!-- /Sidebar -->



        <footer id="footer" class="top-space">

            <div class="footer1">
                <div class="container">
                    <div class="row">

                        <div class="col-md-3 widget">
                            <h3 class="widget-title">Kontakt</h3>
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
                                    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"about"),$_smarty_tpl ) );?>
">Dlaczego pielegnować?</a> |
                                    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"produkty"),$_smarty_tpl ) );?>
">Produkty</a> |
                                    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"tajne"),$_smarty_tpl ) );?>
">tajne</a> |
                                    <b><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"loginShow"),$_smarty_tpl ) );?>
">Zaloguj</a></b>

    <b><a href="http://localhost/anwensklep/app/views/loginView.tpl">Zaloguj sie</a></b>
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
</body>
</html><?php }
}
