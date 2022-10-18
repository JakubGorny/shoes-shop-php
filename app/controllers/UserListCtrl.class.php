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

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new UserSearchForm();
        $this->editform = new RoleEditForm();
    }

    public function validate() {
        // 1. sprawdzenie, czy parametry zostały przekazane
        // - nie trzeba sprawdzać
        $this->form->login = ParamUtils::getFromRequest('login');

        // 2. sprawdzenie poprawności przekazanych parametrów
        // - nie trzeba sprawdzać

        return !App::getMessages()->isError();
    }

    public function load_data() {

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
                    ], $where);
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

    public function action_usersList() {
        $this->load_data();
        App::getSmarty()->assign('role_list', $this->role_list);
        App::getSmarty()->assign('searchForm', $this->form); // dane formularza (wyszukiwania w tym wypadku)
        App::getSmarty()->assign('users', $this->records);  // lista rekordów z bazy danych
        App::getSmarty()->display('UsersListFullPage.tpl');
    }

    public function action_usersListPart() {
        $this->load_data();
        App::getSmarty()->assign('role_list', $this->role_list);
        App::getSmarty()->assign('searchForm', $this->form);
        App::getSmarty()->assign('users', $this->records);
        App::getSmarty()->display('UsersListTable.tpl');
    }
}