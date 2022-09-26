<?php
/* Smarty version 4.1.0, created on 2022-09-26 15:27:32
  from 'X:\XAMPP 7.4\htdocs\shoes-shop-php\app\views\OrderConfirm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6331a8c4e9dec3_68565835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abe8e6db801622c05f03c20e9cd0a6f3e89d011e' => 
    array (
      0 => 'X:\\XAMPP 7.4\\htdocs\\shoes-shop-php\\app\\views\\OrderConfirm.tpl',
      1 => 1663987246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6331a8c4e9dec3_68565835 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3493315236331a8c4e95c48_79322932', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_3493315236331a8c4e95c48_79322932 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3493315236331a8c4e95c48_79322932',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <h1>Zamówienie zostało złożone</h1>
            </div>
        </section>
        <div class="container">
        <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
                <div class="alert alert-primary messages bottom-margin">
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
<?php
}
}
/* {/block 'content'} */
}
