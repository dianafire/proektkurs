<?php

    session_start();

    if(!isset($_SESSION['basket'])){
        $_SESSION['basket'] = array();
    }

    if(!isset($_SESSION['userID'])){
        $_SESSION['userID'] = null;
    }



    require_once (dirname(__FILE__).'/lib/Validate.php');
    require_once (dirname(__FILE__).'/lib/DataBase.php');
    require_once (dirname(__FILE__).'/functions/html.php');

    require_once (dirname(__FILE__).'/pages/Home.php');
    require_once (dirname(__FILE__).'/pages/Products.php');
    require_once(dirname(__FILE__) . '/pages/User.php');
    require_once(dirname(__FILE__) . '/pages/Basket.php');
    //$db=DataBase::getDB();
    //$db1=DataBase::getDB();


    $controller=Validate::get('controller','string','Home');
    $action=Validate::get('action','string','index');


    if (class_exists($controller)){

        $page=new $controller;

        call_user_func(array($page,$action),[]);
    }

    else {
        echo "Sorry!";
    }



?>