<?php 

	include_once (dirname(__FILE__).'/session.php');


	$idRem=$_GET['id'];

	$key=array_search($idRem, $_SESSION['basket']);

	if (isset($key)){
		unset($_SESSION['basket'][$key]);
	}


	header('Location: order.php');














?>