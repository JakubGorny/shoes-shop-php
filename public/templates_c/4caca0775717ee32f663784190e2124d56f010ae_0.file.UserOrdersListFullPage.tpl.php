<?php
/* Smarty version 4.1.0, created on 2022-10-09 18:47:07
  from 'X:\XAMPP 7.4\htdocs\shoes-shop-php\app\views\UserOrdersListFullPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6342fb0bea29b4_67500536',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4caca0775717ee32f663784190e2124d56f010ae' => 
    array (
      0 => 'X:\\XAMPP 7.4\\htdocs\\shoes-shop-php\\app\\views\\UserOrdersListFullPage.tpl',
      1 => 1665153848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:UserOrdersListTable.tpl' => 1,
  ),
),false)) {
function content_6342fb0bea29b4_67500536 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1808152236342fb0be97dd3_54085050', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1808152236342fb0be97dd3_54085050 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1808152236342fb0be97dd3_54085050',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="container">
    <div class="m-2 ">

    </div>
    <div id="table" class="container">
        <?php $_smarty_tpl->_subTemplateRender("file:UserOrdersListTable.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

<div class="bottom-margin">
    <form id="search-form" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
productListPart','table'); return false;">
        <legend>Opcje wyszukiwania</legend>
        <fieldset>
            <input autocomplete="off" type="text" placeholder="Nazwa produktu" name="name" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->name;?>
" /><br />
            <button type="submit" class="pure-button pure-button-primary">Filtruj</button>
        </fieldset>
    </form>
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
