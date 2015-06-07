<?php

	include_once (dirname(__FILE__).'/session.php');

	

	$idAdd=$_GET['id'];


	$key=array_search($idAdd, $_SESSION['basket']);
	if ($key===false){
		$_SESSION['basket'][]=$idAdd;
	}
	

	header('Location: main.php');

	













?>