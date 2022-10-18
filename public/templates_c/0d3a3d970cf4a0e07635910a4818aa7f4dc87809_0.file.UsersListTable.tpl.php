<?php
/* Smarty version 4.1.0, created on 2022-09-26 18:42:54
  from 'X:\XAMPP 7.4\htdocs\shoes-shop-php\app\views\UsersListTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6331d68e66cb09_34556433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d3a3d970cf4a0e07635910a4818aa7f4dc87809' => 
    array (
      0 => 'X:\\XAMPP 7.4\\htdocs\\shoes-shop-php\\app\\views\\UsersListTable.tpl',
      1 => 1664210559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6331d68e66cb09_34556433 (Smarty_Internal_Template $_smarty_tpl) {
?><table  class="table">
<thead class="table-dark">
	<tr>
		<th scope="col">Login</th>
		<th scope="col">Client</th>
		<th scope="col">Role</th>
		<th scope="col">Options</th>
	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'u');
$_smarty_tpl->tpl_vars['u']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
$_smarty_tpl->tpl_vars['u']->do_else = false;
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['u']->value["login"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["name"];?>
 <?php echo $_smarty_tpl->tpl_vars['u']->value["lastname"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["role"];?>
</td><td><form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
roleUpdate/<?php echo $_smarty_tpl->tpl_vars['u']->value['user_id'];?>
" method="post"><select class="form-select" aria-label="Change user role" name="role" id=""><option value=100>admin</option><option value=70>employee</option><option value=10>user</option></select><button type="submit" class="btn btn-success" href= "">Zapisz</button></form>&nbsp;</td></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table><?php }
}
