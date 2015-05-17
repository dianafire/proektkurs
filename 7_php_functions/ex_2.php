<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<title>Задача 2</title>


</head>

<body>



<?php


	function numString($number,$word){

		$lenght=mb_strlen($word,'UTF-8');

		echo "Number at the beginning: $number, ";

		if ($lenght%2===0){
			$number+=12;
		}

		else{
			$number-=3;
		}

		if ($number>10){
			$number-=22;
		}

		else if($number<0){
			$number+=14;
		}

		echo "word: $word, lenght: $lenght, number at the end: $number; <br />";

	}


	numString(6,"boy");
	numString(6,"girl");
	numString(6,"момче");
	numString(6,"момиче");
	numString(6,"господин");
	numString(6,"госпожица");



?>

</body>

</html>