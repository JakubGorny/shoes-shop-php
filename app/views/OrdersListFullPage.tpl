{extends file="main.tpl"}
{block name=content}

<div class="container">
    <div class="m-2 ">

    </div>
    <div id="table" class="container">
        {include file="OrdersListTable.tpl"}
</div>
    <div class="d-flex justify-content-center align-items-center flex-column m-2">
        <span class="badge bg-light text-dark">Strona {$page} z {$count}</span>
        <div>   
            {if $page > 1 }
            <a class="btn btn-secondary" href="{$conf->action_url}ordersList/{$page - 1}">PREVIOUS</a>
            {/if}
            {if $page < $count}
            <a class="btn btn-secondary" href="{$conf->action_url}ordersList/{$page + 1}">NEXT</a>
            {/if}
        </div>
    </div>
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