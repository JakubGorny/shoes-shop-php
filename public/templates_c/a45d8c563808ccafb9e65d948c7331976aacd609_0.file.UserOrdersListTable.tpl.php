<?php
/* Smarty version 4.1.0, created on 2022-09-25 20:01:12
  from 'X:\XAMPP 7.4\htdocs\shoes-shop-php\app\views\UserOrdersListTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63309768de8df1_32415175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a45d8c563808ccafb9e65d948c7331976aacd609' => 
    array (
      0 => 'X:\\XAMPP 7.4\\htdocs\\shoes-shop-php\\app\\views\\UserOrdersListTable.tpl',
      1 => 1664128783,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63309768de8df1_32415175 (Smarty_Internal_Template $_smarty_tpl) {
?><table  class="table">
<thead class="table-dark">
	<tr>
		<th scope="col">Order Number</th>
		<th scope="col">Client</th>
		<th scope="col">Status</th>
		<th scope="col">Options</th>
	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'o');
$_smarty_tpl->tpl_vars['o']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->do_else = false;
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['o']->value["order_id"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['o']->value["name"];?>
 <?php echo $_smarty_tpl->tpl_vars['o']->value["lastname"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['o']->value["order_status"];?>
</td><td><a class="btn btn-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
orderView/<?php echo $_smarty_tpl->tpl_vars['o']->value['order_id'];?>
">Podgląd</a>&nbsp;</td></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table><?php }
}
