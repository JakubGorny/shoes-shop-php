{extends file="main.tpl"}
{block name=content}
<section class="h-100" style="background-color: #eee;">
    <div class="container h-100 py-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-10">

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>

                </div>

                <div class="card rounded-3 mb-4">

                    <div class="card-body p-4">
                        {if $msgs->isInfo()}

                                {foreach $msgs->getMessages() as $msg}
                                    <h1>{$msg->text}</h1>
                                {/foreach}

                        {/if}
                        {if $cart !=0 }
                        {foreach $cart as $keys => $item}
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-md-2 col-lg-2 col-xl-2">
                                <img
                                        src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                                        class="img-fluid rounded-3" alt="">
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-3">
                                <p class="lead fw-normal mb-2">{$item["name"]}</p>
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                <button class="btn btn-link px-2"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                    <i class="fas fa-minus"></i>
                                </button>

                                <input id="form1" min="0" name="quantity" value={$item["quantity"]} type="number"
                                       class="form-control form-control-sm" />

                                <button class="btn btn-link px-2"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                <h5 class="mb-0">{$item["price"] * {$item["quantity"]}} zł</h5>
                            </div>
                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                <a href="{$conf->action_url}deleteFromCart/{$keys}" class="text-danger"><i class="fas fa-trash fa-lg"> Remove</i></a>
                            </div>

                        </div>
                            <input type="text" hidden value={$item["item_id"]} />
                        {/foreach}
                        {/if}
                    </div>



                <div class="card">
                    <div class="card-body">
                        <a type="button" href="{$conf->action_url}placeOrder" class="btn btn-warning btn-block btn-lg">Place order</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
{/block}