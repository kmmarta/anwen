<?php
/* Smarty version 4.1.0, created on 2022-05-20 17:06:58
  from 'C:\xampp\htdocs\anwensklep\app\views\sidebarRight.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6287ae92cf8772_17821909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3cc52b4b1b683b77e8660ee987741a67f8183e5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\anwensklep\\app\\views\\sidebarRight.tpl',
      1 => 1653059176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6287ae92cf8772_17821909 (Smarty_Internal_Template $_smarty_tpl) {
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
">KOSZYK</a></li>

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
                <li class="active">Produkty</li>
            </ol>

            <div class="product-sec1">
                <!--/mens-->

                <div class="col-md-4 product-men">
                    <div class="product-shoe-info shoe">
                        <div class="men-pro-item">
                            <div class="men-thumb-item">

                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('action'=>"koszykDodaj",'idProduktu'=>1),$_smarty_tpl ) );?>
" class="link-product-add-cart">Dodaj do koszyka</a>
                                    </div>

                                </div>

                            </div>
                            <div class="item-info-product">
                                <h4>
                                    <a href="http://localhost/anwensklep/app/views/sidebarLeft.tpl">Odżywka proteinowa do włosów wysokoporowatych </a>
                                </h4>
                                <div class="info-product-price">
                                    <div class="grid_meta">
                                        <div class="product_price">
                                            <div class="grid-price ">
                                                <span class="money ">30.00zł</span>
                                                <p><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/proteinowawysoko.jpg" alt="" class="img-rounded pull-right" width="300" > 
                                            </div>

                                        </div>

                                    </div>
                                    <div class="shoe single-item hvr-outline-out">
                                        <form action="#" method="post">

                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="shoe_item" value="Odżywka proteinowa do włosów wysokoporowatych">
                                            <input type="hidden" name="amount" value="30.00">


                                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                        </form>

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
                                        <a href="http://localhost/anwensklep/app/views/sidebarLeft.tpl" class="link-product-add-cart">Dodaj do koszyka</a>
                                    </div>
                                </div>

                            </div>
                            <div class="item-info-product">
                                <h4>
                                    <a href="http://localhost/anwensklep/app/views/sidebarLeft.tpl">Odżywka emolientowa dla włosów wysokoporowatych </a>
                                </h4>
                                <div class="info-product-price">
                                    <div class="grid_meta">
                                        <div class="product_price">
                                            <div class="grid-price ">
                                                <span class="money ">35.00zł</span>
                                                <p><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/emolientowawysoko.jpg" alt="" class="img-rounded pull-right" width="300" > 
                                            </div>
                                        </div>

                                    </div>
                                    <div class="shoe single-item hvr-outline-out">
                                        <form action="#" method="post">

                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="shoe_item" value="Odżywka emolientowa dla włosów wysokoporowatych">
                                            <input type="hidden" name="amount" value="35.00">



                                        </form>

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
                                        <a href="http://localhost/anwensklep/app/views/sidebarLeft.tpl" class="link-product-add-cart">Dodaj do koszyka</a>
                                    </div>
                                </div>

                            </div>
                            <div class="item-info-product">
                                <h4>
                                    <a href="http://localhost/anwensklep/app/views/sidebarLeft.tpl">Szampon zwiększający objętość </a>
                                </h4>
                                <div class="info-product-price">
                                    <div class="grid_meta">
                                        <div class="product_price">
                                            <div class="grid-price ">
                                                <span class="money ">35.00zł</span>
                                                <p><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/szamponobjetosc.jpg" alt="" class="img-rounded pull-right" width="320" > 
                                            </div>
                                        </div>

                                    </div>
                                    <div class="shoe single-item hvr-outline-out">
                                        <form action="#" method="post">

                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="shoe_item" value="Szampon zwiększający objętość">
                                            <input type="hidden" name="amount" value="35.00">


                                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                        </form>

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
                                        <a href="http://localhost/anwensklep/app/views/sidebarLeft.tpl" class="link-product-add-cart">Dodaj do koszyka</a>
                                    </div>
                                </div>

                            </div>
                            <div class="item-info-product">
                                <h4>
                                    <a href="http://localhost/anwensklep/app/views/sidebarLeft.tpl">Odżywka nawilżająca dla każdej porowatości włosów</a>
                                </h4>
                                <div class="info-product-price">
                                    <div class="grid_meta">
                                        <div class="product_price">
                                            <div class="grid-price ">
                                                <span class="money ">35.00zł</span>
                                                <p><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/nawilzajaca.jpg" alt="" class="img-rounded pull-right" width="250" > 
                                            </div>
                                        </div>

                                    </div>
                                    <div class="shoe single-item hvr-outline-out">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="shoe_item" value="Odżywka nawilżająca dla każdej porowatości włosów">
                                            <input type="hidden" name="amount" value="35.00">


                                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                        </form>

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
                                        <a href="http://localhost/anwensklep/app/views/sidebarleft.tpl" class="link-product-add-cart">Dodaj do koszyka</a>
                                    </div>
                                </div>

                            </div>
                            <div class="item-info-product">
                                <h4>
                                    <a href="http://localhost/anwensklep/app/views/sidebarLeft.tpl">Odżywka emolientowa dla włosów średnioporowatych </a>
                                </h4>
                                <div class="info-product-price">
                                    <div class="grid_meta">
                                        <div class="product_price">
                                            <div class="grid-price ">
                                                <span class="money ">35.00zł</span>
                                                <p><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/emolientowasrednio.jpg" alt="" class="img-rounded pull-right" width="240" > 
                                            </div>
                                        </div>

                                    </div>
                                    <div class="shoe single-item hvr-outline-out">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="shoe_item" value=">Odżywka emolientowa dla włosów średnioporowatych ">
                                            <input type="hidden" name="amount" value="35.00">


                                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                        </form>

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
                                        <a href="http://localhost/anwensklep/app/views/sidebarLeft.tpl" class="link-product-add-cart">Dodaj do koszyka</a>
                                    </div>
                                </div>

                            </div>
                            <div class="item-info-product">
                                <h4>
                                    <a href="http://localhost/anwensklep/app/views/sidebarLeft.tpl">Odżywka proteinowa dla włosów średnioporowatych</a>
                                </h4>
                                <div class="info-product-price">
                                    <div class="grid_meta">
                                        <div class="product_price">
                                            <div class="grid-price ">
                                                <span class="money ">35.00zł</span>
                                                <p><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/proteinowasrednio.jpg" alt="" class="img-rounded pull-right" width="297" > 
                                            </div>
                                        </div>

                                    </div>
                                    <div class="shoe single-item hvr-outline-out">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="shoe_item" value="Odżywka proteinowa dla włosów średnioporowatych">
                                            <input type="hidden" name="amount" value="35.00">


                                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                        </form>

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
                                        <a href="http://localhost/anwensklep/app/views/sidebarLeft.tpl" class="link-product-add-cart">Dodaj do koszyka</a>
                                    </div>
                                </div>

                            </div>
                            <div class="item-info-product">
                                <h4>
                                    <a href="http://localhost/anwensklep/app/views/sidebarLeft.tpl">Odżywka emolientowa dla włosów niskoporowatych</a>
                                </h4>
                                <div class="info-product-price">
                                    <div class="grid_meta">
                                        <div class="product_price">
                                            <div class="grid-price ">
                                                <span class="money ">35.00zł</span>
                                                <p><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/emolientowanisko.jpg" alt="" class="img-rounded pull-right" width="250" > 
                                            </div>
                                        </div>

                                    </div>
                                    <div class="shoe single-item hvr-outline-out">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="shoe_item" value="Odżywka emolientowa dla włosów niskoporowatych">
                                            <input type="hidden" name="amount" value="35.00">


                                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                        </form>

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
                                        <a href="http://localhost/anwensklep/app/views/sidebarLeft.tpl" class="link-product-add-cart">Dodaj do koszyka</a>
                                    </div>
                                </div>

                            </div>
                            <div class="item-info-product">
                                <h4>
                                    <a href="http://localhost/anwensklep/app/views/sidebarLeft.tpl">Odżywka proteinowa dla dzieci</a>
                                </h4>
                                <div class="info-product-price">
                                    <div class="grid_meta">
                                        <div class="product_price">
                                            <div class="grid-price ">
                                                <span class="money ">35.00zł</span>
                                                <p><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/odzywkadladzieci.jpg" alt="" class="img-rounded pull-right" width="300" > 
                                            </div>
                                        </div>

                                    </div>
                                    <div class="shoe single-item hvr-outline-out">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="shoe_item" value="Odżywka proteinowa dla włosów niskoporowatych">
                                            <input type="hidden" name="amount" value="375.00">


                                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                        </form>

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
                                        <a href="http://localhost/anwensklep/app/views/sidebarLeft.html" class="link-product-add-cart">Dodaj do koszyka</a>
                                    </div>
                                </div>

                            </div>
                            <div class="item-info-product">
                                <h4>
                                    <a href="http://localhost/anwensklep/app/views/sidebarLeft.tpl">Odżywka Emoleintowa do włosów bez spłukiwania</a>
                                </h4>
                                <div class="info-product-price">
                                    <div class="grid_meta">
                                        <div class="product_price">
                                            <div class="grid-price ">
                                                <span class="money ">35.00zł</span>
                                                <p><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/emolientowabezsplukiwania.jpg" alt="" class="img-rounded pull-right" width="200" > 
                                            </div>
                                        </div>

                                    </div>
                                    <div class="shoe single-item hvr-outline-out">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="shoe_item" value="Odżywka Emoleintowa do włosów bez spłukiwania">
                                            <input type="hidden" name="amount" value="35.00">


                                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                        </form>

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
                                        <a href="http://localhost/anwensklep/app/views/sidebarLeft.tpl" class="link-product-add-cart">Dodaj do koszyka</a>
                                    </div>
                                </div>

                            </div>
                            <div class="item-info-product">
                                <h4>
                                    <a href="http://localhost/anwensklep/app/views/sidebarLeft.tpl">Wcierka do włosów</a>
                                </h4>
                                <div class="info-product-price">
                                    <div class="grid_meta">
                                        <div class="product_price">
                                            <div class="grid-price ">
                                                <span class="money ">35.00zł</span>
                                                <p><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/wcierka.jpg" alt="" class="img-rounded pull-right" width="350" > 
                                            </div>
                                        </div>

                                    </div>
                                    <div class="shoe single-item hvr-outline-out">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="shoe_item" value="Wcierka do włosów">
                                            <input type="hidden" name="amount" value="35.00">


                                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                        </form>

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
                                        <a href="http://localhost/anwensklep/app/views/sidebarLeft.tpl" class="link-product-add-cart">Dodaj do koszyka</a>
                                    </div>
                                </div>

                            </div>
                            <div class="item-info-product">
                                <h4>
                                    <a href="http://localhost/anwensklep/app/views/single.tpl">Maska do włosów średnioporowatych 'winogrono i keratyna'</a>
                                </h4>
                                <div class="info-product-price">
                                    <div class="grid_meta">
                                        <div class="product_price">
                                            <div class="grid-price ">
                                                <span class="money ">35.00zł</span>
                                                <p><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/winogrono.jpg" alt="" class="img-rounded pull-right" width="300" > 
                                            </div>
                                        </div>

                                    </div>
                                    <div class="shoe single-item hvr-outline-out">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="shoe_item" value="Maska do włosów średnioporowatych 'winogrono i keratyna'">
                                            <input type="hidden" name="amount" value="35.00">


                                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                        </form>

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
                                        <a href="http://localhost/anwensklep/app/views/sidebarLeft.tpl" class="link-product-add-cart">Dodaj do koszyka</a>
                                    </div>
                                </div>

                            </div>
                            <div class="item-info-product">
                                <h4>
                                    <a href="http://localhost/anwensklep/app/views/sidebarLeft.tpl">Szampon pomarańcza i bergamotka do normalnej i przetłuszczającej się skóry</a>
                                </h4>
                                <div class="info-product-price">
                                    <div class="grid_meta">
                                        <div class="product_price">
                                            <div class="grid-price ">
                                                <span class="money ">35.00zł</span>
                                                <p><img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/pomarancza.jpg" alt="" class="img-rounded pull-right" width="300" > 
                                            </div>
                                        </div>

                                    </div>
                                    <div class="shoe single-item hvr-outline-out">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="shoe_item" value="Szampon pomarańcza i bergamotka do normalnej i przetłuszczającej się skóry">
                                            <input type="hidden" name="amount" value="35.00">


                                            <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                        </form>

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
