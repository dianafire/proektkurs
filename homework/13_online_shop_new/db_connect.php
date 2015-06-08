

<?php

	$servername="localhost";
	$username="dragan";
	$password="SomeHardPassword123";
	$dbname="new_shop";


	$connection=mysqli_connect($servername, $username, $password, $dbname);

	if (!$connection){
		die ("Connect error (".mysqli_connect_errno().")".mysqli_connect_error());
	}

	//echo "YES";

	mysqli_set_charset($connection,'utf8');


?>

