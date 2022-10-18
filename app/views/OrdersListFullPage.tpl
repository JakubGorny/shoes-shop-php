{extends file="main.tpl"}
{block name=content}

<div class="container">
    <div class="m-2 ">

    </div>
    <div id="table" class="container">
        {include file="OrdersListTable.tpl"}
</div>
Strona nr {$page} z {$count}
<a class="btn btn-secondary" href="{$conf->action_url}ordersList/{$page + 1}">NEXT</a>
<a class="btn btn-secondary" href="{$conf->action_url}ordersList/{$page - 1}">PREVIOUS</a>
</div>
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