

<?php

	$servername="localhost";
	$username="phpcourseUser";
	$password="SomeHardPassword1";
	$dbname="kindergarder";


	$connection=mysqli_connect($servername, $username, $password, $dbname);

	if (!$connection){
		die ("Connect error (".mysqli_connect_errno().")".mysqli_connect_error());
	}

	mysqli_set_charset($connection,'utf8');


?>

