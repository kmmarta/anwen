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
        
        {block name=content}          


    <section class="box special ">
        <header class="major">

            <h3> Lista pracowników</h3>    


        </header>
        {if !empty($pracownicy)}    
            <form id="search-form" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('search-form', '{url action="searchPracownicy"}', 'table');
                          return false;">
                <ul class="actions special">
                    <li> Znajdź pracownika:
                        <input type="text" name="sf_pracownicyID" id="sf_pracownicyID" placeholder="Wpisz ID..." pattern="{literal}^[\d]{1,4}${/literal}" required>
                        <input type="submit" id="submit" value="Szukaj" /> </li>
                </ul>
            </form>
        {/if}
        <div id="table">
            {include file="PracownicyListTable.tpl"}
        </div>
        <ul class="actions special">
            {if count($conf->roles)>0 && isset($conf->roles['pracownik'])} 
                {if $conf->roles['pracownicy']}
                    <li><a href="{url action="controlPanel"}" class="button alt">Powrót </a></li>
                    {/if}
                {/if}
                {if count($conf->roles)>0 && isset($conf->roles['admin'])} 
                    {if $conf->roles['admin']}
                    <li><a href="{url action="tajne"}" class="button alt">Powrót </a></li>
                    {/if}
                {/if}
        </ul>
    </section>
{/block}






















    {include file="footer.tpl"}





    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="http://localhost/anwensklep/public/assets/js/headroom.min.js"></script>
    <script src="http://localhost/anwensklep/public/assets/js/jQuery.headroom.min.js"></script>
    <script src="http://localhost/anwensklep/public/assets/js/template.js"></script>
</body>
</html>




