
{block name=content}          

    <!-- Main -->

    <header>
        <h2>Edytuj pracownika nr {$form->PracownicyID}</h2>
    </header>

    <div class="box">
           <form action="{url action="savePracownicy" PracownicyID=$form->PracownicyID}" method="post">
                    <div class="row gtr-50 gtr-uniform">

                        <div class="col-6 col-12-mobilep">
                            Imię:
                            <input type="text" name="imie" id="imie" value="{if isset($form->imie)}{$form->imie}{/if}" placeholder="Imię" pattern="{literal}^[A-Za-zżźćńółęąśŻŹĆĄŚĘŁÓŃ]{2,}${/literal}" title="Imię musi zaczynać się od litery i musi składać się z minimum 2 znaków."  required/>
                        </div>
                        <div class="col-6 col-12-mobilep">
                            Nazwisko:
                            <input type="text" name="nazwisko" id="nazwisko" value="{if isset($form->nazwisko)}{$form->nazwisko}{/if}" placeholder="Nazwisko" pattern="{literal}^[A-Za-zżźćńółęąśŻŹĆĄŚĘŁÓŃ]{2,}${/literal}" title="Nazwisko musi zaczynać się od litery i musi składać się z minimum 2 znaków." required/>
                        </div>
                        
                        <div class="col-6 col-12-mobilep">
                            E-mail: 
                            <input type="email" name="email" id="email" value="{if isset($form->email)}{$form->email}{/if}" placeholder="E-mail" pattern="{literal}^[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}${/literal}" required/>
                        </div>
                        <div class="col-12">
                            <ul class="actions special">
                                <li><input type="submit" id="submit" value="Zapisz" /></li>
                                 <li> <a class="button alt" href="{url action="showPracownicy" page=$prevPage}">Powrót</a></li>
                            </ul>
                        </div>
                    </div>
                </form> 
    </div>
{/block}