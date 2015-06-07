

<?php

	$servername="localhost";
	$username="petkan";
	$password="SomeHardPassword123";
	$dbname="accessories_shop";


	$connection=mysqli_connect($servername, $username, $password, $dbname);

	if (!$connection){
		die ("Connect error (".mysqli_connect_errno().")".mysqli_connect_error());
	}

	//echo "YES";

	mysqli_set_charset($connection,'utf8');


?>

