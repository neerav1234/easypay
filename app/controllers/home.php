<?php

namespace Controller;
session_start();
class Home {
    public function get() {
        \Controller\Utils::renderHome(NULL, false);
    }

    public function post() {
      
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password1 = $_POST["password"];
        $isSetAll = \Controller\Utils::isSetAll($name, $email, $password1);
        if($isSetAll){
            $password = password_hash($password1, PASSWORD_DEFAULT);
            $registered=\Model\General::create($name, $email, $password );

            \Controller\Utils::renderHome($registered, true);
        }
        else{
            \Controller\Utils::renderHome(NULL, false);
        }
      
    }
}