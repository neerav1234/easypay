<?php

namespace Model;
session_start();

class User {
    public static function getallplans(){
        $db = \DB::get_instance();
        $stmt = $db->prepare("SELECT * FROM plan");
        $stmt-> execute();
        $rows = $stmt->fetchAll();
        return $rows;
    }


    public static function get_all_userdata(){
        $db = \DB::get_instance();
        $stmt = $db->prepare("SELECT * FROM transactions WHERE email = ?");
        $stmt-> execute([$_SESSION['email']]);
        
        $rows = $stmt->fetchAll();
      //  var_dump($rows);
        return $rows;
    }

  
    public static function login( $email, $password) {
        $db = \DB::get_instance();
        $stmt = $db->prepare("SELECT * FROM users WHERE email = ? ");
        $stmt->execute([$email]);
        $rows = $stmt->fetchAll();
       
        if(password_verify($password ,$rows[0]['password'])){
            session_start();
            $_SESSION['userid'] = $rows[0]['id'];
            $_SESSION['email'] = $email;
           //  var_dump($_SESSION['userid']);
        }else{
          //  echo('failed');
        }
    }

 
    
}