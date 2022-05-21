
<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top headroom" >
    <div class="container">
        <div class="navbar-header">
            <!-- Button for smallest screens -->

        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right">
                <li class="active"><a href="{url action="hello"}">SKLEP </a></li>

                <li><a href="{url action="about"}">Dlaczego pielegnować?</a></li>

                <li><a href="{url action="produkty"}">PRODUKTY</a></li>
                <li><a href="{url action="koszyk"}">KOSZYK</a></li>

                <li><a href="{url action="tajne"}">TAJNE</a></li>
               
                    {if count($conf->roles)>0}
                    <li><a href="{url action="logout"}">Wylogujj się</a></li>
                    {else}
                    <li><a href="{url action="loginShow"}">Zaloguj się</a></li>
                {/if} 

            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div> 
<!-- /.navbar -->





