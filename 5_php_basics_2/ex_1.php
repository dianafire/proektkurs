<?php


	for ($i=0;$i<=100;$i++){
		


		if (($i%2===0)&&($i%7!==0)){
			echo "<p style='background-color:blue;'>$i</p><br />";
	 
		}

		if (($i%2===0)&&($i%7===0)){
			echo "<p style='background-color:blue;'>$i BINGO</p><br />";
		}


		if (($i%2!==0)&&($i%7!==0)){
			echo "<p style='background-color:green;'>$i</p><br />";
	 
		}

		if (($i%2!==0)&&($i%7===0)){
			echo "<p style='background-color:green;'>$i BINGO</p><br />";
	 
		}


	}


	

?>