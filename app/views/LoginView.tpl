<<!DOCTYPE html>
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
        <script src="assets/js/html5shiv.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        {include file="navbar.tpl"}
                        
                        
                        
        <form action="{$conf->action_root}login" method="post" class="pure-form pure-form-aligned bottom-margin">
            <legend>Logowanie do systemu</legend>
            {*        <form> action="{url action="login"}" method="post">*}
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="thin text-center">Zaloguj sie</h3>
                        <p class="text-center text-muted">Jeśli jesteś nowy <a href ="{url action="rejestracja"}">zarejestruj się</a> aby nabyć produkty </p>
                        <hr>

                        <form>
                            <input type="text" name="login" id="login" value="{if isset($form->login)}{$form->login}{/if}" placeholder="Login" required/>
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
               
                    {include file="messages.tpl"}
            </div>

        </div>
    </form>


    <section class="special">

        Nie masz konta? <a href ="{url action="rejestracjashow"}"> Zarejestruj się </a> <br>

    </section>

    {include file="footer.tpl"}





    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="http://localhost/anwensklep/public/assets/js/headroom.min.js"></script>
    <script src="http://localhost/anwensklep/public/assets/js/jQuery.headroom.min.js"></script>
    <script src="http://localhost/anwensklep/public/assets/js/template.js"></script>
</body>
</html>



