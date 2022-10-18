<?php
/* Smarty version 4.1.0, created on 2022-10-09 20:13:34
  from 'X:\XAMPP 7.4\htdocs\shoes-shop-php\app\views\ProductListFullPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63430f4e795df6_37705526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d502b1b1311e50008686eb960e2c04763b22eef' => 
    array (
      0 => 'X:\\XAMPP 7.4\\htdocs\\shoes-shop-php\\app\\views\\ProductListFullPage.tpl',
      1 => 1665339209,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:ProductListTable.tpl' => 1,
  ),
),false)) {
function content_63430f4e795df6_37705526 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75314114263430f4e78bcc5_25377532', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_75314114263430f4e78bcc5_25377532 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_75314114263430f4e78bcc5_25377532',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="bottom-margin container">
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
<div class="container">
    <div class="m-2 ">
        <a class="btn btn-success float-end m-1" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
productNew">+ Nowy produkt</a>
    </div>
    <div id="table" class="container">
<?php $_smarty_tpl->_subTemplateRender("file:ProductListTable.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
