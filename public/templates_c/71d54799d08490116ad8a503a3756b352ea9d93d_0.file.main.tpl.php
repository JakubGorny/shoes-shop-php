<?php
/* Smarty version 4.1.0, created on 2022-10-21 22:27:33
  from 'X:\XAMPP 7.4\htdocs\shoes-shop-php\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_635300b5ac4585_72916147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71d54799d08490116ad8a503a3756b352ea9d93d' => 
    array (
      0 => 'X:\\XAMPP 7.4\\htdocs\\shoes-shop-php\\app\\views\\templates\\main.tpl',
      1 => 1666384045,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635300b5ac4585_72916147 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/../assets/css/styles.css" rel="stylesheet" />
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/functions.js"><?php echo '</script'; ?>
>

    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
home">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
ordersList">Orders</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
usersList">Users</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
productList">All Products</a></li>
                                <li><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
userOrdersList">Moje zamówienia</a></li>   
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
showCart">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">
                                0
                            </span>
                        </button>
                    </form>

                    <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
                    <form class="d-flex p-2" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout" >
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi bi-person-fill"></i>
                            Log-out
                        </button>
                    </form>
                    <?php } else { ?>
                    <form class="d-flex p-2" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginView" >
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi bi-person-fill"></i>
                            Log-in
                        </button>
                    </form>
                    <?php }?>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Shop in style</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Coming soon</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1436655086635300b5ac3955_64595629', 'content');
?>

        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy;Jakub Górny 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
        <!-- Core theme JS-->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/../assets/js/scripts.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }
/* {block 'content'} */
class Block_1436655086635300b5ac3955_64595629 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1436655086635300b5ac3955_64595629',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
