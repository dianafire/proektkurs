<?php


	$red=mt_rand(0,255); // 0 and 255 are included in the function execution
	$green=mt_rand(0,255);
	$blue=mt_rand(0,255);


	echo "<div style='background-color:rgb($red,$green,$blue);width:200px;height:200px;'> 
			<p> - red: $red; <br />
			<p> - green: $green; <br />
			<p> - blue: $blue. <br />
		</div>";


?>