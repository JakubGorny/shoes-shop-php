<?php

namespace app\controllers;

use app\forms\RegisterForm;
use core\App;
use core\Utils;
use core\Message;
use core\ParamUtils;
use core\Validator;


class RegisterCtrl {

    private $form; //dane formularza

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new RegisterForm();
    }

    /* Walidacja danych przed zapisem (nowe dane lub edycja).
     * Poniżej pełna, możliwa konfiguracja metod walidacji:
     *  [ 
     *    'trim' => true,
     *    'required' => true,
     *    'required_message' => 'message...',
     *    'min_length' => value,
     *    'max_length' => value,
     *    'email' => true,
     *    'numeric' => true,
     *    'int' => true,
     *    'float' => true,
     *    'date_format' => format,
     *    'regexp' => expression,
     *    'validator_message' => 'message...',
     *    'message_type' => error | warning | info,
     *  ]
     */
    public function validateSave() {

        // Używaj ParamUtils::getFromXXX('param',true,"...") do sprawdzenia czy parametr
        // został przesłany, -  czy ISTNIEJE (isset) - może być pusty, ale jest
        
        
        $v = new Validator();

        $this->form->login = $v->validateFromPost('login', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj login',
            'min_length' => 2,
            'max_length' => 32,
            'validator_message' => 'Login powinna zawierać od 2 do 35 znaków'
        ]);
        
        // Używaj walidatora z konfiguracją "'required' => true" aby sprawdzić,
        // czy parametr NIE JEST PUSTY (!empty)
        
        $this->form->name = $v->validateFromPost('name', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj imię',
            'min_length' => 1,
            'max_length' => 35,
            'validator_message' => 'Imię powinno mieć od 1 do 35 znaków'
        ]);
        $this->form->lastname = $v->validateFromPost('lastname', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj nazwisko',
            'min_length' => 0,
            'max_length' => 35,
            'validator_message' => 'Nazwisko może zawierać maksymalnie 35 znaków'
        ]);
        $this->form->password = $v->validateFromPost('password', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj hasło',
            'min_length' => 0,
            'max_length' => 200,
            'validator_message' => 'Hasło może zawierać maksymalnie 80 znaków'
        ]);
        $this->form->password_repeat = $v->validateFromPost('password', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj hasło',
            'min_length' => 0,
            'max_length' => 200,
            'validator_message' => 'Hasło może zawierać maksymalnie 80 znaków'
        ]);
        $this->form->street = $v->validateFromPost('street', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj ulice',
            'min_length' => 0,
            'max_length' => 40,
            'validator_message' => 'Ulica może zawierać maksymalnie 40 znaków'
        ]);
        $this->form->flat_number = $v->validateFromPost('flat_number', [
            'trim' => true,
            'max_length' => 10,
            'validator_message' => 'Numer lokalu może zawierać maksymalnie 10 znaków'
        ]);
        $this->form->city = $v->validateFromPost('city', [
            'trim' => true,
            'required' => true,
            'required_message' => 'Podaj miasto',
            'min_length' => 0,
            'max_length' => 60,
            'validator_message' => 'Miasto może zawierać maksymalnie 60 znaków'
        ]);

        try {
            
            $validateLoginInDb = App::getDB()->query("
                SELECT * 
                FROM user 
                WHERE login = :login",
                [':login'=>$this->form->login]
                )->fetchAll();
            
                
           
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
        if ($this->form->password != $this->form->password_repeat){
            App::getMessages()->addMessage(new Message("Hasła się nie zgadzają", Message::ERROR));
        }  
        if (!empty($validateLoginInDb)){
            App::getMessages()->addMessage(new Message("Login is taken", Message::ERROR));
        }
        return !App::getMessages()->isError();
    }


    public function action_registerView() {
        $this->generateView();
    }

   
    // public function action_productEdit() {
    //     // 1. walidacja id osoby do edycji
    //     if ($this->validateEdit()) {
    //         try {
    //             // 2. odczyt z bazy danych osoby o podanym ID (tylko jednego rekordu)
    //             $record = App::getDB()->get("product", "*", [
    //                 "product_id" => $this->form->id
    //             ]);
    //             // 2.1 jeśli osoba istnieje to wpisz dane do obiektu formularza
    //             $this->form->id = $record['product_id'];
    //             $this->form->name = $record['name'];
    //             $this->form->price = $record['prize'];
    //             $this->form->category_id = $record['category_id'];
    //             $this->form->description = $record['description'];
    //         } catch (\PDOException $e) {
    //             Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
    //             if (App::getConf()->debug)
    //                 Utils::addErrorMessage($e->getMessage());
    //         }
    //     }

    //     // 3. Wygenerowanie widoku
    //     $this->generateView();
    // }


    public function action_register() {

        // 1. Walidacja danych formularza (z pobraniem)
        if ($this->validateSave()) {
            // 2. Zapis danych w bazie
            try {

                //2.1 Nowy rekord
                
                        App::getDB()->insert("user", [
                            "name" => $this->form->name,
                            "lastname" => $this->form->lastname,
                            "login" => $this->form->login,
                            "password" => $this->form->password,
                            "role" => 10,
                            "street" => $this->form->street,
                            "flat_number" => $this->form->flat_number,
                            "city" => $this->form->city,
                        ]);
                    
                Utils::addInfoMessage('Pomyślnie zapisano rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }

            
            App::getRouter()->forwardTo('loginView');
        } else {
            
            $this->generateView();
        }
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza dla widoku
        App::getSmarty()->display('Register.tpl');
    }

}