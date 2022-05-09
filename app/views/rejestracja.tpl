<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
 <meta charset="utf-8"/>
 <title>Rejestracja| Anwen framework</title>
</head>

<body>
    <div class="row">
        <form action="{$conf->action_root}osobarejestracja" method="post" class="pure-form pure-form-aligned">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Rejestracja</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Załóż nowe konto</h3>
							
							  <div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="{$conf->action_url}loginShow"  class="pure-menu-heading pure-menu-link"> zaloguj sie</a>
                                                        <hr>

							<form>
                                                            <div class="top-margin">
                                                                <label>login<span class="text-danger">*</span></label>
									<input type="text" class="form-control">
								</div>
								<div class="top-margin">
									<label>Imie</label>
									<input type="text" class="form-control">
								</div>
								<div class="top-margin">
									<label>Nazwisko</label>
									<input type="text" class="form-control">
								</div>
								<div class="top-margin">
									<label>Email  <span class="text-danger">*</span></label>
									<input type="text" class="form-control">
								</div>

								<div class="row top-margin">
									<div class="col-sm-6">
										<label>Hasło <span class="text-danger">*</span></label>
										<input type="text" class="form-control">
									</div>
									<div class="col-sm-6">
										<label>Powtórz hasło <span class="text-danger">*</span></label>
										<input type="text" class="form-control">
									</div>
								</div>

								<hr>

								<div class="row">
									<div class="col-lg-8">
										
									</div>
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" type="submit">Rejestruj</button>
									</div>
								</div>
							</form>
						</div>
					</div>
</form>	
				</div>
				
			</article>
			<!-- /Article -->



{if $msgs->isInfo()}
<ul>
  {foreach $msgs->getMessages() as $msg}
  <li>{$msg->text}</li>
  {/foreach}
</ul>
{/if}
 </body>

</html>

