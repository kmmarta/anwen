<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
 <meta charset="utf-8"/>
 <title>Kontakt| Amelia framework</title>
</head>

<body>
<h3>Generowanie adresów (z użyciem obiektu konfiguracji)</h3>
 
Link bezwzględny do strony akcji hello: <a href="{$conf->action_url}contact"> link </a>
<br/>
Link względny do strony akcji hello: <a href="{$conf->action_root}contact"> link </a>
<br/>

<h3>Adresy można również generować w Amelii za pomocą dedykowanych funkcji url oraz rel_url:</h3>

Link bezwzględny do strony akcji hello: <a href="{url action='contact'}"> link </a>
<br/>
Link względny do strony akcji hello: <a href="{rel_url action='contact'}"> link </a>
<br/>

Wyświetlenie listy komunikatów:

{if $msgs->isInfo()}
<ul>
  {foreach $msgs->getMessages() as $msg}
  <li>{$msg->text}</li>
  {/foreach}
</ul>
{/if}
 </body>

</html>

