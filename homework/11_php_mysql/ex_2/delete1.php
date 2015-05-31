

<?php

	include_once dirname(_FILE_).'/header.php';
	$title='Изтриване';
	head($title);

	if(isset($_POST['submit']) && isset($_POST['check1']) && $_POST['check1']=="1"){

			$ChildID=$_POST['ChildID'];

			if (($_POST['delete'])=="yes"){
				

				include_once dirname(_FILE_).'/db_connect.php';

				$sql="DELETE FROM kindergarder.children

					WHERE ChildID=$ChildID;";

				$result=mysqli_query($connection,$sql);

				if ($result===TRUE){
					echo "<p>Вие успешно изтрихте данните на дете с номер ID=$ChildID!</p>";
					echo "<p>Върнете се на <a href='select.php'> основната таблица!</a></p>";
				}

				else {
				echo "Възникна грешка със заявката: " . $sql . "<br>" . $connection->error;
				echo "Моля, опитайте пак!";
				}

				mysqli_close($connection);


			}
			
			else{
				echo "<p>ОК, за проверка на данните на детето се върнете на <a href='select.php'> основната таблица!</a></p>";
			}
			
			

	} 

?>

</div>

</body>
</html>