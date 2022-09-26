<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('home'); #default action
App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('home', 'HomeCtrl');
//Utils::addRoute('action_name', 'controller_class_name');
Utils::addRoute('loginView', 'LoginCtrl');
Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');
Utils::addRoute('registerView', 'RegisterCtrl');
Utils::addRoute('register', 'RegisterCtrl');
Utils::addRoute('productList', 'ProductListCtrl');
Utils::addRoute('productListPart','ProductListCtrl',	['admin','employee']);
Utils::addRoute('productNew',    'ProductEditCtrl',	['admin','employee']);
Utils::addRoute('productEdit',    'ProductEditCtrl',	['admin','employee']);
Utils::addRoute('productSave',    'ProductEditCtrl',	['admin','employee']);
Utils::addRoute('productDelete',    'ProductEditCtrl',	['admin']);
Utils::addRoute('usersList', 'UserListCtrl',['admin']);
Utils::addRoute('roleUpdate', 'UserListCtrl',['admin']);
Utils::addRoute('signUp', 'RegisterCtrl');
Utils::addRoute('userOrdersList', 'UserOrderCtrl',['admin','employee','user']);
Utils::addRoute('orderView', 'OrderListCtrl',['employee','admin','user']);
Utils::addRoute('statusUpdate', 'OrderListCtrl',['admin','employee']);
Utils::addRoute('ordersList', 'OrderListCtrl',['employee','admin']);
Utils::addRoute('placeOrder', 'OrderCtrl',['admin','employee','user']);
Utils::addRoute('showCart', 'CartCtrl');
Utils::addRoute('addToCart', 'CartCtrl');
Utils::addRoute('deleteFromCart', 'CartCtrl');
Utils::addRoute('itemView', 'HomeCtrl');