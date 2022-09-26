<?php
/* Smarty version 4.1.0, created on 2022-09-25 19:52:01
  from 'X:\XAMPP 7.4\htdocs\shoes-shop-php\app\views\OrdersListTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_633095418de2c3_96391331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cf2c4871fbb2073393fec4c637d1cc74d2021b8' => 
    array (
      0 => 'X:\\XAMPP 7.4\\htdocs\\shoes-shop-php\\app\\views\\OrdersListTable.tpl',
      1 => 1664128315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633095418de2c3_96391331 (Smarty_Internal_Template $_smarty_tpl) {
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
</td><td><form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
statusUpdate/<?php echo $_smarty_tpl->tpl_vars['o']->value['order_id'];?>
" method="post"><select class="form-select" aria-label="Change order status" name="status" id=""><option value="Nowe">Nowe</option><option value="W realizacji">W realizacji</option><option value="Wysłane">Wysłane</option></select><button type="submit"class="btn btn-success" href= "">Zapisz</button><a class="btn btn-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
orderView/<?php echo $_smarty_tpl->tpl_vars['o']->value['order_id'];?>
">Podgląd</a></form>&nbsp;</td></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table><?php }
}
