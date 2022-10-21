<?php
/* Smarty version 4.1.0, created on 2022-10-21 20:37:45
  from 'X:\XAMPP 7.4\htdocs\shoes-shop-php\app\views\OrdersListFullPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6352e6f9d5d5e1_09100829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5141d4dc54a2a81061f4c6113f66281d5b8578ad' => 
    array (
      0 => 'X:\\XAMPP 7.4\\htdocs\\shoes-shop-php\\app\\views\\OrdersListFullPage.tpl',
      1 => 1666377463,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:OrdersListTable.tpl' => 1,
  ),
),false)) {
function content_6352e6f9d5d5e1_09100829 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10496242966352e6f9d52b82_31553872', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_10496242966352e6f9d52b82_31553872 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10496242966352e6f9d52b82_31553872',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="container">
    <div class="m-2 ">

    </div>
    <div id="table" class="container">
        <?php $_smarty_tpl->_subTemplateRender("file:OrdersListTable.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
    <div class="d-flex justify-content-center align-items-center flex-column m-2">
        <span class="badge bg-light text-dark">Strona <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
 z <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</span>
        <div>   
            <?php if ($_smarty_tpl->tpl_vars['page']->value > 1) {?>
            <a class="btn btn-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
ordersList/<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">PREVIOUS</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['page']->value < $_smarty_tpl->tpl_vars['count']->value) {?>
            <a class="btn btn-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
ordersList/<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
">NEXT</a>
            <?php }?>
        </div>
    </div>
</div>
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


<?php
}
}
/* {/block 'content'} */
}
