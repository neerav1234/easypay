<?php

namespace Controller;
session_start();

class Utils {
    public static function isSetAll(...$values)
    {
        $flag=true;
        foreach($values as $v)
            if(empty($v) || !isset($v))
                $flag=false;
        return $flag;
    }

    public static function renderBankHome(){
        echo \View\Loader::make()->render("templates/bankhome.twig", array(
           "account" => \Model\Bank::get_usersata(),
        ));
    }

    public static function renderBankLogin(){
        echo \View\Loader::make()->render("templates/banklogin.twig", array(
        //    "posts" => \Model\User::get_all(),
            "notloggedin" => true,
        ));
    }

    public static function renderClientHome(){
        $transactions= \Model\User::get_all_userdata();
       // var_dump($transactions);
        echo \View\Loader::make()->render("templates/clienthome.twig" ,array(
            "transactions" => \Model\User::get_all_userdata(),
            )); 
    }

    public static function renderHome($registered, $bool){
        echo \View\Loader::make()->render("templates/home.twig", array(
           "registered" => $registered,
           "bool" => $bool,
        ));
    }

    public static function renderLogin(){
        echo \View\Loader::make()->render("templates/login.twig", array(
            "notloggedin" => true,
        ));
    }

    public static function renderBankReg(){
        echo \View\Loader::make()->render("templates/bankreg.twig", array(
           
            "notloggedin" => true,
        ));
    }

    public static function renderChoosePlan(){
        echo \View\Loader::make()->render("templates/chooseplan.twig", array(
            "plans" => \Model\User::getallplans(),
            "notloggedin" => true,
        ));
    }

    public static function renderMakePayment($planid){
        echo \View\Loader::make()->render("templates/makepayment.twig", array(
            "planid" => $planid,
            "otpexist" => $_SESSION["otpexist"],
        ));
    }

    public static function renderPaymentSuccessful($matched, $balenough){
        echo \View\Loader::make()->render("templates/paymentsuccessful.twig", array(
          "matched" => $matched,
          "balenough" => $balenough,
        ));
    }

    public static function renderDepositMoney($amount){
        echo \View\Loader::make()->render("templates/depositmoney.twig", array(
          "amount" => $amount,
        ));
    }

}