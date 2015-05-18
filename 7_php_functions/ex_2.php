<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<title>Задача 2</title>


</head>

<body>



<?php


	function numString($word,$number =6){

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

	echo "WITHOUT REFERENCE FOR NUMBER - NO CHANGE:<br />";

	$strArray=array("boy","girl","момче","момиче","господин","госпожица");

	foreach ($strArray as $word){          // call the function 6 times with different word and the same number - defaul value=6

		numString($word);
	}



	echo "<br /> <br />";


	function numStringRef($word,&$number){

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

	
	echo "USING REFERENCE FOR NUMBER - CHANGE EVERY TIME:<br />";

	$number=6;

	foreach ($strArray as $word){          // call the function 6 times with different word and different number (because of the reference)

		numStringRef($word,$number);
	}


?>

</body>

</html>
