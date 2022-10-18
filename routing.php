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
Utils::addRoute('productListPart','ProductListCtrl',	['admin','employe']);
Utils::addRoute('productNew',    'ProductEditCtrl',	['admin','employe']);
Utils::addRoute('productEdit',    'ProductEditCtrl',	['admin','employe']);
Utils::addRoute('productSave',    'ProductEditCtrl',	['admin','employe']);
Utils::addRoute('productDelete',    'ProductEditCtrl',	['admin']);
Utils::addRoute('usersList', 'UserListCtrl',['admin']);
Utils::addRoute('usersListPart', 'UserListCtrl',['admin']);
Utils::addRoute('roleUpdate', 'UserListCtrl',['admin']);
Utils::addRoute('signUp', 'RegisterCtrl');
Utils::addRoute('userOrdersList', 'UserOrderCtrl',['admin','employe','user']);
Utils::addRoute('orderView', 'OrderListCtrl',['employe','admin','user']);
Utils::addRoute('statusUpdate', 'OrderListCtrl',['admin','employe']);
Utils::addRoute('ordersList', 'OrderListCtrl',['employe','admin']);
Utils::addRoute('placeOrder', 'OrderCtrl',['admin','employe','user']);
Utils::addRoute('showCart', 'CartCtrl');
Utils::addRoute('addToCart', 'CartCtrl');
Utils::addRoute('deleteFromCart', 'CartCtrl');
Utils::addRoute('itemView', 'HomeCtrl');