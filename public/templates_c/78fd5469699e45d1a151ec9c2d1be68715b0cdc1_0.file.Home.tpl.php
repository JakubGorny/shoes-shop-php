<?php
/* Smarty version 4.1.0, created on 2022-10-21 22:39:58
  from 'X:\XAMPP 7.4\htdocs\shoes-shop-php\app\views\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6353039e9470d2_19945442',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78fd5469699e45d1a151ec9c2d1be68715b0cdc1' => 
    array (
      0 => 'X:\\XAMPP 7.4\\htdocs\\shoes-shop-php\\app\\views\\Home.tpl',
      1 => 1666384796,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6353039e9470d2_19945442 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6976908836353039e940184_14550880', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_6976908836353039e940184_14550880 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6976908836353039e940184_14550880',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
                    <div class="col mb-5"><div class="card h-100"><div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div><img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." /><div class="card-body p-4"><div class="text-center"><h5 class="fw-bolder"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
itemView/<?php echo $_smarty_tpl->tpl_vars['p']->value['product_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value["name"];?>
</a></h5><div class="d-flex justify-content-center small text-warning mb-2"><div class="bi-star-fill"></div><div class="bi-star-fill"></div><div class="bi-star-fill"></div><div class="bi-star-fill"></div><div class="bi-star-fill"></div></div><span class="text-muted text-decoration-line-through"></span><?php echo $_smarty_tpl->tpl_vars['p']->value["price"];?>
 zł</div></div><!-- Product actions--><form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
addToCart/<?php echo $_smarty_tpl->tpl_vars['p']->value['product_id'];?>
" method="post"><div class="card-footer p-4 pt-0 border-top-0 bg-transparent"><div class="text-center"><button class="btn btn-outline-dark mt-auto" type="submit">Add to cart</button></div></div><input type="text" name="item_name" hidden value="<?php echo $_smarty_tpl->tpl_vars['p']->value["name"];?>
"><input type="text" name="price" hidden value="<?php echo $_smarty_tpl->tpl_vars['p']->value["price"];?>
"><input type="text" name="quantity" hidden value=1></form></div></div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>




                </div>
            </div>
        </section>
<?php
}
}
/* {/block 'content'} */
}
