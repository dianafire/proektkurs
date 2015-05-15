<?php


	$cars= array('Toyota','BMW','Kia','Honda','Mercedes','Suzuki');

	$lenght=count($cars);


	foreach ($cars as $value) {
		echo "<p>I want to buy $value.</p>";
	}

	echo "<br /> <br /> <br />";

	unset ($cars[5]);

	foreach ($cars as $value) {
		echo "<p>I will buy $value.</p>";
	}

