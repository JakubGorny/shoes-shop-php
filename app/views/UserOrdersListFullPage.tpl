{extends file="main.tpl"}
{block name=content}

<div class="container">
    <div class="m-2 ">

    </div>
    <div id="table" class="container">
        {include file="UserOrdersListTable.tpl"}
</div>

<div class="bottom-margin">
    <form id="search-form" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('search-form','{$conf->action_root}productListPart','table'); return false;">
        <legend>Opcje wyszukiwania</legend>
        <fieldset>
            <input autocomplete="off" type="text" placeholder="Nazwa produktu" name="name" value="{$searchForm->name}" /><br />
            <button type="submit" class="pure-button pure-button-primary">Filtruj</button>
        </fieldset>
    </form>
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