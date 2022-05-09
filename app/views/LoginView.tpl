{extends file="main.tpl"}

{block name=top}
<form action="{$conf->action_root}login" method="post" class="pure-form pure-form-aligned bottom-margin">
	<legend>Logowanie do systemu</legend>
	<fieldset>
           
            <div class="panel-body">
                <div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="{$conf->action_url}about"  class="pure-menu-heading pure-menu-link"> Strona główna</a>
							<h3 class="thin text-center">Zaloguj sie</h3>
							
							
                                                        <div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="{$conf->action_url}rejestracja"  class="pure-menu-heading pure-menu-link"> zarejestruj się</a>
	
</div><hr>
        <div class="pure-control-group">
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login" value="{$form->login}"/>
		</div>
        <div class="pure-control-group">
			<label for="id_pass">haslo: </label>
			<input id="id_pass" type="password" name="pass" /><br />
		</div>
		<div class="pure-controls">
			<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
		</div>
                
                
	</fieldset>
</form>	
{/block}
