<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;


class HomeCtrl {
    
    public function action_home() {
		        
        $title = "Best shoes in your neighbourhood";
        
        App::getMessages()->addMessage(new Message("Buy your shoes now", Message::INFO));
        Utils::addInfoMessage("Or stop this cringe bro");
        ;   
        App::getSmarty()->assign("slogan",$title);     
        App::getSmarty()->display("index.tpl");
        
    }
    
}
