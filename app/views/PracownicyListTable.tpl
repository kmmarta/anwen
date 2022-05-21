
{if !empty($pracownicy)}    

    <table class="alt">
        <thead>
            <tr>
                <th>ID</th>
                <th>Imię</th>
                <th>Nazwisko</th>
            </tr>
        </thead>
        <tbody>

            {foreach $employees as $emp}
                {strip}
                    <tr>
                        <td>{$emp['id_osoby']}</td>
                        <td>{$emp['imie']}</td>
                        <td>{$emp['nazwisko']}</td>
                        <td>
                            <a class="panelButton editButton" href="{url action="editPracownicy" PracownicyID= $emp['id_osoby']}">Edytuj</a>
                            &nbsp;
                            <a class="panelButton removeButton" href="{url action="deletePracownicy" PracownicyID= $emp['id_osoby']}"
                               onclick="return confirm('Czy na pewno chcesz usunąć tego pracownika? \n{$emp['imie']} {$emp['nazwisko']}, ID: {$emp['id_osoby']}');">Usuń</a>
                        </td>
                    </tr>                              
                {/strip}                        
            {/foreach}
        </tbody>
    </table>


    {if isset($mode)}
        {if !($mode == "searching")}
            <div class="pagination">
                {if !($page == 1)}
                    <a href="{url action="showPracownicy" page=1}">&laquo;&laquo;</a>
                {/if}

                {if $page > 1}
                    <a href="{url action="showPracownicy" page=$page-1}">&laquo;</a>
                {/if}

                {if isset($prevPage)}
                    <a href="{url action="showPracownicy" page=$prevPage}">{$prevPage}</a>
                {/if}

                <a href="{url action="showPracownicy" page=$page}" class="active">{$page}</a>

                {if isset($nextPage)}
                    <a href="{url action="showPracownicy" page=$nextPage}">{$nextPage}</a>
                {/if}

                {if !($page == $max)}
                    <a href="{url action="showPracownicy" page=$page+1}">&raquo;</a>
                    <a href="{url action="showPracownicy" page=$max}">&raquo;&raquo;</a>            
                {/if}
            </div>
        {/if}
    {/if}

{else} 
    <b> Brak pracowników</b>              
{/if}