<?php

namespace app\controllers;

use app\forms\UserSearchForm;
use app\forms\RoleEditForm;
use core\App;
use core\Utils;
use core\ParamUtils;


class UserListCtrl {
    private $role_list;
    private $editform;
    private $form; //dane formularza wyszukiwania
    private $records; //rekordy pobrane z bazy danych
    private $page;
    private $count;
    const PER_PAGE = 3;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new UserSearchForm();
        $this->editform = new RoleEditForm();
    }

    public function validate() {
        // 1. sprawdzenie, czy parametry zostały przekazane
        // - nie trzeba sprawdzać
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->page = ParamUtils::getFromCleanURL(1, false, 'Błędne wywołanie aplikacji');
        // 2. sprawdzenie poprawności przekazanych parametrów
        // - nie trzeba sprawdzać

        return !App::getMessages()->isError();
    }

    public function load_data() {

        $this->validate();

        try {
            $this->count =  App::getDB()->query(
                "SELECT COUNT(u.user_id) AS countItems
                FROM user u")->fetchAll(); 
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
        else if($this->page > $this->count/UserListCtrl::PER_PAGE){
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

        

        try {
            $this->records = App::getDB()->select("user", [
                "user_id",
                "name",
                "lastname",
                "login",
                "role",
                ],
                [
                'LIMIT' => [$offset, UserListCtrl::PER_PAGE],
                ] );
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

    }

    public function load_filtred_data() {

        $this->validate();
       

        $search_params = []; //przygotowanie pustej struktury (aby była dostępna nawet gdy nie będzie zawierała wierszy)
        if (isset($this->form->login) && strlen($this->form->login) > 0) {
            $search_params['login[~]'] = $this->form->login . '%'; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
        }


        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }

        try {
            $this->records = App::getDB()->select("user", [
                "user_id",
                "name",
                "lastname",
                "login",
                "role",
                ], $where );
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas pobierania rekordów');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

    }

    public function action_roleUpdate() {
        $this->editform->id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        $this->editform->role = ParamUtils::getFromRequest('role');
        try{

        App::getDB()->query("UPDATE user
        SET role = :role
        WHERE user_id = :id;",[':role' => $this->editform->role, ':id'=> $this->editform->id]);
            Utils::addInfoMessage('Pomyślnie zapisano rekord');
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
        App::getRouter()->forwardTo('usersList');


    }

    private function calculateOffset($page){
        if($page >= 1){
        $offset = ($page - 1) * UserListCtrl::PER_PAGE;
            return $offset;
        }
        return $page-1;
    }

    private function calculateMaxPageNumber($count) {
        $pages = intval($count/UserListCtrl::PER_PAGE);
        if($count%UserListCtrl::PER_PAGE != 0){
            $pages += 1;
        }
        return $pages;
    }

    public function action_usersList() {
        $this->load_data();
        App::getSmarty()->assign('page', $this->page);
        App::getSmarty()->assign('pages', $this->calculateMaxPageNumber($this->count));
        App::getSmarty()->assign('role_list', $this->role_list);
        App::getSmarty()->assign('searchForm', $this->form); // dane formularza (wyszukiwania w tym wypadku)
        App::getSmarty()->assign('users', $this->records);  // lista rekordów z bazy danych
        App::getSmarty()->display('UsersListFullPage.tpl');
    }

    public function action_usersListPart() {
        $this->load_filtred_data();
        App::getSmarty()->assign('role_list', $this->role_list);
        App::getSmarty()->assign('searchForm', $this->form);
        App::getSmarty()->assign('users', $this->records);
        App::getSmarty()->display('UsersListTable.tpl');
    }
}