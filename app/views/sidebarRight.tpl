<!DOCTYPE html>
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
        <script src="assets/js/html5shiv.js"></script>
        <script src="assets/js/respond.min.js"></script>
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

                        <li><a href="{url action="about"}">Dlaczego pielegnować?</a></li>

                        <li><a href="{url action="produkty"}">PRODUKTY</a></li>
                        <li><a href="{url action="reservation"}">REZERWACJA</a></li>

                        <li><a href="{url action="tajne"}">TAJNE</a></li>
                        <li><a href="{url action="loginShow"}">Zaloguj/ Wyloguj</a></li>

                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div> 
        <!-- /.navbar -->

        <header id="head" class="secondary"></header>

        <!-- container -->
        <div class="container">
            {include file="messages.tpl"}
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
                                        <a href="{url action="reservation" id_produkt=1}" class="link-product-add-cart">ZAREZERWUJ</a>
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
                                                <p><img src="{$conf->app_url}/assets/images/wysoko.jpg" alt="" class="img-rounded pull-right" width="300" > 
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
                                        <a href="{url action="reservation" id_produkt=2}" class="link-product-add-cart">ZAREZERWUJ</a>
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
                                                <p><img src="{$conf->app_url}/assets/images/srednioodzywki.jpg" alt="" class="img-rounded pull-right" width="300" > 
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
                                       <a href="{url action="reservation" id_produkt=3}" class="link-product-add-cart">ZAREZERWUJ</a>
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
                                                <p><img src="{$conf->app_url}/assets/images/niskoodzywki.jpg" alt="" class="img-rounded pull-right" width="300" > 
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
                                        <a href="{url action="reservation" id_produkt=4}" class="link-product-add-cart">ZAREZERWUJ</a>
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
                                                <p><img src="{$conf->app_url}/assets/images/porostzestaw.jpg" alt="" class="img-rounded pull-right" width="300" > 
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
                                      <a href="{url action="reservation" id_produkt=5}" class="link-product-add-cart">ZAREZERWUJ</a>
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
                                                <p><img src="{$conf->app_url}/assets/images/pielegnacjaskory.jpg" alt="" class="img-rounded pull-right" width="300" > 
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
                                       <a href="{url action="reservation" id_produkt=6}" class="link-product-add-cart">ZAREZERWUJ</a>
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
                                                <p><img src="{$conf->app_url}/assets/images/zestawblond.jpg" alt="" class="img-rounded pull-right" width="300" > 
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

                    <p><img src="{$conf->app_url}/images/TEKILA.jpg" alt="" class="img-rounded pull-right" width="250" > 
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
                                    <a href="{url action="about"}">Dlaczego pielegnować?</a> |
                                    <a href="{url action="produkty"}">Produkty</a> |
                                    <a href="{url action="tajne"}">tajne</a> |
                                    <b><a href="{url action="loginShow"}">Zaloguj</a></b>

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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="http://localhost/anwensklep/public/assets/js/headroom.min.js"></script>
<script src="http://localhost/anwensklep/public/assets/js/jQuery.headroom.min.js"></script>
<script src="http://localhost/anwensklep/public/assets/js/template.js"></script>
</body>
</html>