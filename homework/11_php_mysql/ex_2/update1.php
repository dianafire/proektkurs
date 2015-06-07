<?php
	include_once dirname(__FILE__).'/header.php';
	$title='Редакция';
	head($title);


	if(isset($_POST['submit']) && isset($_POST['check1']) && $_POST['check1']=="1"){

			$Name=valid($_POST['name']);       // using function (valid) to secure the input
			$Age=valid($_POST['age']);
			$ChildID=$_POST['ChildID'];
			$kindergandenID=$_POST['kinderganden'];	
			
			//echo "<p>$Name, $Age, $ChildID, $kindergandenID</p>";

			include_once dirname(__FILE__).'/db_connect.php';

			$sql ="UPDATE kindergarder.children

				SET `Name`='$Name', Age=$Age, KinderGarderID=$kindergandenID

				WHERE ChildID=$ChildID;
			";

			$result=mysqli_query($connection,$sql);

			if ($result===TRUE){

				echo "<p>Вие успешно редактирахте данните на дете с номер ID=$ChildID!</p>";
				echo "<p>Върнете се на <a href='select.php'> основната таблица!</a></p>";
			}

			else {
				echo "Възникна грешка със заявката: " . $sql . "<br>" . $connection->error;
				echo "Моля, опитайте пак!";
			}

			mysqli_close($connection);

		}
		


		function valid($param){      // to secure input 

			$param=trim($param);
			$param=strip_tags($param);
			$param=addslashes($param);
			$param=htmlspecialchars($param);

			return $param;

		}
?>

</body>
</html>

