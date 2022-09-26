<?php
/* Smarty version 4.1.0, created on 2022-09-25 19:16:55
  from 'X:\XAMPP 7.4\htdocs\shoes-shop-php\app\views\ProductListTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63308d0759e7e5_27182101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '917b2d3e055e4b43253478074a822bedd13d6032' => 
    array (
      0 => 'X:\\XAMPP 7.4\\htdocs\\shoes-shop-php\\app\\views\\ProductListTable.tpl',
      1 => 1664126214,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63308d0759e7e5_27182101 (Smarty_Internal_Template $_smarty_tpl) {
?><table  class="table">
<thead class="table-dark">
	<tr>
		<th scope="col">Name</th>
		<th scope="col">Manufacturer</th>
		<th scope="col">Size</th>
		<th scope="col">Color</th>
		<th scope="col">Price</th>
		<th scope="col">Options</th>
	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["manufacturer"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["size"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["color"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["price"];?>
</td><td><a class="btn btn-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
productEdit/<?php echo $_smarty_tpl->tpl_vars['p']->value['product_id'];?>
">Edytuj</a>&nbsp;<a class="btn btn-danger" href= "<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
productDelete/<?php echo $_smarty_tpl->tpl_vars['p']->value['product_id'];?>
">Usuń</a></td></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table><?php }
}
