{extends file="main.tpl"}
{block name=content}

<div class="container d-flex justify-content-start">
    <form id="search-form" class="m-3"  onsubmit="ajaxPostForm('search-form','{$conf->action_root}usersListPart','table'); return false;">
        <legend class="form-label">Opcje wyszukiwania</legend>
        <fieldset>
            <input autocomplete="off" class="form-control" type="text" placeholder="Nazwa użytkownika" name="login" value="{$searchForm->login}" /><br />
            <button type="submit" class="btn bg-dark text-light">Filtruj</button>
        </fieldset>
    </form>
</div>	

<div class="container">
    <div class="m-2 ">

    </div>
    <div id="table" class="container">
        {include file="UsersListTable.tpl"}
</div>
<div class="d-flex justify-content-center align-items-center flex-column m-2">
        <span class="badge bg-light text-dark">Strona {$page} z {$pages}</span>
        <div>   
            {if $page > 1 }
            <a class="btn btn-secondary" href="{$conf->action_url}usersList/{$page - 1}">PREVIOUS</a>
            {/if}
            {if $page < $pages}
            <a class="btn btn-secondary" href="{$conf->action_url}usersList/{$page + 1}">NEXT</a>
            {/if}
        </div>
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