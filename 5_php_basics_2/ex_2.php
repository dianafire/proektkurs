<?php


	define(COLS, 4);
	define(ROWS, 5);



	echo "<table border=1 style='border-collapse:collapse;'> <tbody>";
	
	for ($i1=1;$i1<=ROWS;$i1++){

		echo "<tr>";
		for($i2=1;$i2<=COLS;$i2++){

			echo "<td style='padding:2px;'>row=$i1, column=$i2</td>";

		}
		echo "</tr>";

	}

	echo "</tbody> </table>";

?>