<?php

session_start();

if (! isset($_SESSION['basket'])){
	$_SESSION['basket'] = array();
}

function getHost(){
	return 'http://localhost/kurs/13_online_shop_new/';
}