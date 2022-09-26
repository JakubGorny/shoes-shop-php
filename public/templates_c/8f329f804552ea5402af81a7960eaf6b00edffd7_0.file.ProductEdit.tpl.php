<?php
/* Smarty version 4.1.0, created on 2022-09-26 16:25:55
  from 'X:\XAMPP 7.4\htdocs\shoes-shop-php\app\views\ProductEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6331b6730084d2_45253946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f329f804552ea5402af81a7960eaf6b00edffd7' => 
    array (
      0 => 'X:\\XAMPP 7.4\\htdocs\\shoes-shop-php\\app\\views\\ProductEdit.tpl',
      1 => 1664202346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6331b6730084d2_45253946 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20175539816331b672f40920_62999040', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_20175539816331b672f40920_62999040 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20175539816331b672f40920_62999040',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section>
        <div class="container px-4 px-lg-5 mt-5">
            <h1 class="display-6 fw-bolder text-center">Product Info</h1>
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
productSave" method="post">
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="text" id="id_name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->name;?>
" class="form-control" />
                    <label class="form-label" for="form2Example1">Name</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="text" id="manufacturer" name="manufacturer" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->manufacturer;?>
" class="form-control" />
                    <label class="form-label" for="form2Example1">Manufacturer</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="text" id="id_price" name="price" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->price;?>
" />
                    <label class="form-label" for="form2Example2">Price</label>
                </div>

                <div class="form-outline mb-4">
                    <textarea type="textarea" id="material" name="material" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->material;?>
" ><?php echo $_smarty_tpl->tpl_vars['form']->value->material;?>
</textarea>
                    <label class="form-label" for="form2Example2">Materials</label>
                </div>
                <div class="form-outline mb-4">
                    <input type="textarea" id="color" name="color" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->color;?>
" ><?php echo $_smarty_tpl->tpl_vars['form']->value->color;?>
</input>
                    <label class="form-label" for="form2Example2">Color</label>
                </div>
                <!-- 2 column grid layout for inline styling -->

                 <div class="form-outline mb-4">
                    <input type="number" id="size" name="size" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->size;?>
" />
                    <label class="form-label" for="form2Example2">Size</label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-success">Zapisz</button>
                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
">

            </form>
            <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
                <div class="messages bottom-margin">
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                            <li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>
            <?php }?>
        </div>
    </section>
<?php
}
}
/* {/block 'content'} */
}
