<?php

	$company = array('DIR' =>'http://www.dir.bg' , 
					'FACEBOOK'=>'http://www.facebook.com',
					'HIGH VIEW ART'=>'http://www.highviewart.com',
					'W3SCHOOL'=>'http://www.w3schools.com',
					'MTEL'=>'http://www.mtel.bg',);


	foreach ($company as $key => $value) {
		echo "<ul> <li>";

		echo "<a href='$value' target='_blank' style='text-decoration:none;'>$key</a>";

		echo "</li> </ul>";

	}





