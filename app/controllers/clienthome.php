<?php

namespace Controller;
session_start();

class Clienthome {
    public function get() {
       

        if(isset($_SESSION["userid"])){
          //  var_dump( $_SESSION['email']);
            \Controller\Utils::renderClientHome();
        }
        else{
            header("Location: /login");
        }
       

    }

    public function post() {
        
         $bookid = $_POST['bookid'];
         if(isset($_SESSION["userid"])){
        
            \Controller\Utils::renderClientHome();
         } else{
            header("Location: /login");
         }
       
    }
}