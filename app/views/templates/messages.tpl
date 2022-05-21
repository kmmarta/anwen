
<!DOCTYPE HTML>
<!-- Messages -->
{if $msgs->isMessage()}
    {foreach $msgs->getMessages() as $msg}
        <div class="{if $msg->isError()}alertError{/if} {if $msg->isInfo()}alertSucces{/if}{if $msg->isWarning()}alertWarning{/if}">
            <span class="closebtn" onclick="this.parentElement.style.display = 'none';">&times;</span> 

            {$msg->text}
        </div>
    {/foreach}
{/if}