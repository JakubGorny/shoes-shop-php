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
        <link href="{$conf->app_url}/../assets/css/styles.css" rel="stylesheet" />
        <script type="text/javascript" src="{$conf->app_url}/js/functions.js"></script>

    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="{$conf->action_root}home">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link" href="{$conf->action_root}ordersList">Orders</a></li>
                        <li class="nav-item"><a class="nav-link" href="{$conf->action_root}usersList">Users</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{$conf->action_root}productList">All Products</a></li>
                                <li><a class="dropdown-item" href="{$conf->action_root}userOrdersList">Moje zamówienia</a></li>   
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" action="{$conf->action_root}showCart">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">
                                0
                            </span>
                        </button>
                    </form>

                    {if count($conf->roles)>0}
                    <form class="d-flex p-2" action="{$conf->action_root}logout" >
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi bi-person-fill"></i>
                            Log-out
                        </button>
                    </form>
                    {else}
                    <form class="d-flex p-2" action="{$conf->action_root}loginView" >
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi bi-person-fill"></i>
                            Log-in
                        </button>
                    </form>
                    {/if}
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
        {block name=content} Domyślna treść zawartości .... {/block}
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy;Jakub Górny 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{$conf->app_url}/../assets/js/scripts.js"></script>
    </body>
</html>