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
	
{if count($conf->roles)>0}

							
 
 <a href="{$conf->action_root}about" class="pure-menu-heading pure-menu-link">Sklep</a>
 <a href="{$conf->action_root}Produkty" class="pure-menu-heading pure-menu-link">Produkty</a>
  <a href="{$conf->action_root}koszyk" class="pure-menu-heading pure-menu-link">koszyk</a>
 <a href="{$conf->action_root}rejestracja" class="pure-menu-heading pure-menu-link">Zarejestruj sie</a>	
 <a href="{$conf->action_root}loginShow" class="pure-menu-heading pure-menu-link">Zaloguj</a>
{else}	
	
        
       
       
{/if}
</div>

{block name=top} {/block}

{block name=messages}

{if $msgs->isMessage()}
<div class="messages bottom-margin">
	<ul>
	{foreach $msgs->getMessages() as $msg}
	{strip}
		<li class="msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}">{$msg->text}</li>
	{/strip}
	{/foreach}
	</ul>
</div>
{/if}

{/block}

{block name=bottom} {/block}

</body>

</html>