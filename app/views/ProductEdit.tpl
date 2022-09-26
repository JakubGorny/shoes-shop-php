{extends file="main.tpl"}
{block name=content}
    <section>
        <div class="container px-4 px-lg-5 mt-5">
            <h1 class="display-6 fw-bolder text-center">Product Info</h1>
            <form action="{$conf->action_root}productSave" method="post">
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="text" id="id_name" name="name" value="{$form->name}" class="form-control" />
                    <label class="form-label" for="form2Example1">Name</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="text" id="manufacturer" name="manufacturer" value="{$form->manufacturer}" class="form-control" />
                    <label class="form-label" for="form2Example1">Manufacturer</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="text" id="id_price" name="price" class="form-control" value="{$form->price}" />
                    <label class="form-label" for="form2Example2">Price</label>
                </div>

                <div class="form-outline mb-4">
                    <textarea type="textarea" id="material" name="material" class="form-control" value="{$form->material}" >{$form->material}</textarea>
                    <label class="form-label" for="form2Example2">Materials</label>
                </div>
                <div class="form-outline mb-4">
                    <input type="textarea" id="color" name="color" class="form-control" value="{$form->color}" >{$form->color}</input>
                    <label class="form-label" for="form2Example2">Color</label>
                </div>
                <!-- 2 column grid layout for inline styling -->

                 <div class="form-outline mb-4">
                    <input type="number" id="size" name="size" class="form-control" value="{$form->size}" />
                    <label class="form-label" for="form2Example2">Size</label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-success">Zapisz</button>
                <input type="hidden" name="id" value="{$form->id}">

            </form>
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
        </div>
    </section>
{/block}