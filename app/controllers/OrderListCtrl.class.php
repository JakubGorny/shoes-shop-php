<?php

namespace app\controllers;

use app\forms\OrderEditForm;
use app\forms\ProductSearchForm;
use core\App;
use core\Utils;
use core\ParamUtils;


class OrderListCtrl {
    private $status_list;
    private $form; //dane formularza wyszukiwania
    private $records; //rekordy pobrane z bazy danych
    private $editform;
    private $order_item;
    private $page;
    private $count;
    private $true_pages;
    const PER_PAGE = 5;
    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new ProductSearchForm();
        $this->editform = new OrderEditForm();
    }

    public function validate() {
        // 1. sprawdzenie, czy parametry zostały przekazane
        // - nie trzeba sprawdzać
        $this->form->name = ParamUtils::getFromRequest('sf_name');
        $this->page = ParamUtils::getFromCleanURL(1, false, 'Błędne wywołanie aplikacji');
       

        // 2. sprawdzenie poprawności przekazanych parametrów
        

        return !App::getMessages()->isError();
    }

    private function calculateOffset($page){
        if($page >= 1){
        $offset = ($page - 1) * OrderListCtrl::PER_PAGE;
            return $offset;
        }
        return $page-1;
    }

    private function calculateMaxPageNumber($count) {
        $pages = intval($count/OrderListCtrl::PER_PAGE);
        if($count%OrderListCtrl::PER_PAGE != 0){
            $pages += 1;
        }
        return $pages;
    }

    public function load_data() {
        
        
        $this->validate();

        try {
            $this->count =  App::getDB()->query(
                "SELECT COUNT(o.order_id) AS countItems
                FROM orders o")->fetchAll(); 
            $this->count = intval($this->count[0]['countItems']);
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        if($this->page < 1){
            $this->page = 1;
            $offset = 0;
        }
        else if($this->page > $this->count/OrderListCtrl::PER_PAGE){
            $this->page = $this->calculateMaxPageNumber($this->count);
            $offset = $this->calculateOffset($this->page);
        }
        else if($this->page != ''){
            $offset = $this->calculateOffset($this->page);
        }
        else{
            $offset = 0;
            $this->page = 1;
        }

        $search_params = []; //przygotowanie pustej struktury (aby była dostępna nawet gdy nie będzie zawierała wierszy)
        if (isset($this->form->name) && strlen($this->form->name) > 0) {
            $search_params['name[~]'] = $this->form->name . '%'; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
        }


        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }

        

        try {
            
            $this->records = App::getDB()->query(
                "SELECT o.order_id, u.name, u.lastname, o.order_status 
                FROM orders o
                INNER JOIN user u
                ON u.user_id = o.user_id
                LIMIT $offset,".OrderListCtrl::PER_PAGE)->fetchAll();
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

    }
    public function action_statusUpdate() {
        $this->editform->id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        $this->editform->status = ParamUtils::getFromRequest('status');
        try{

        App::getDB()->update("orders", [
            "order_status" => $this->editform->status,

        ], [
            "order_id" => $this->editform->id
        ]);
            Utils::addInfoMessage('Pomyślnie zapisano rekord');
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
        App::getRouter()->forwardTo('ordersList');


    }
    public function action_ordersList() {
        $this->load_data();
        App::getSmarty()->assign('page', $this->page);
        App::getSmarty()->assign('count', $this->calculateMaxPageNumber($this->count));
        App::getSmarty()->assign('order_status', $this->status_list);
        App::getSmarty()->assign('searchForm', $this->form); // dane formularza (wyszukiwania w tym wypadku)
        App::getSmarty()->assign('orders', $this->records);  // lista rekordów z bazy danych
        App::getSmarty()->display('OrdersListFullPage.tpl');
    }

    public function action_ordersListPart() {
        $this->load_data();
        App::getSmarty()->assign('searchForm', $this->form);
        App::getSmarty()->assign('orders', $this->records);
        App::getSmarty()->display('OrdersListTable.tpl');
    }
    public function action_orderView() {
        $id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');


        try {
            $this->records = App::getDB()->query("
            SELECT p.name, o.quantity FROM order_items o INNER JOIN product p ON p.product_id = o.product_id where o.order_id = :order;
            ",[':order'=>$id])->fetchAll();

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }


        // 3. Wygenerowanie widoku
        App::getSmarty()->assign('id',$id);
        App::getSmarty()->assign('order',$this->records);
        App::getSmarty()->display("Order.tpl");
    }
}