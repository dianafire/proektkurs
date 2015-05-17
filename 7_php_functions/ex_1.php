<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<title>Задача 1</title>

	<style>
			.superscript{
				vertical-align: super;
			}

			.green{
				color:green;
			}

			.red{
				color:red;
			}

			.blue{
				color:blue;
			}

	</style>

</head>

<body>

	<?php


		for($i=1;$i<=10;){

			$a1=mt_rand();
			$ha1=mt_rand();

			if(($a1!==0)&&($ha1!==0)){         // avoids division by 0

					
				$a=mt_rand()/$a1;          // gets a random float for a
				$ha=mt_rand()/$ha1;		 // gets a random float for ha

				$area=triangleArea($a,$ha);


				if ($area!==0){
						if($area<10){
							echo "<p class='green'>$i. a=$a cm; ha=$ha cm; S=$area cm<span class='superscript'>2</span>; </p>";
						}

						if(($area>=10)&&($area<23)){
							echo "<p class='red'>$i. a=$a cm; ha=$ha cm; S=$area cm<span class='superscript'>2</span>; </p>";
						}

						if($area>=23){
							echo "<p class='blue'>$i. a=$a cm; ha=$ha cm; S=$area cm<span class='superscript'>2</span>; </p>";
						}
				
					$i++;
				}

				else{
					continue;
				}
			}


			else{
				continue;
			}

		}


		function triangleArea($a,$ha){
		
			return $area=($a*$ha)/2;
		
		}



	?>

</body>

</html>