

<?php
	include_once dirname(__FILE__).'/header.php';
	$title='Регистрация на дете';
	head($title);
?>
		
		<h1 class='center'> Регистрация в ЦДГ "Детски рай": </h1>




	<div class="result">


	<?php 
		if(isset($_POST['submit']) && isset($_POST['check']) && $_POST['check']=="1"){

			$Name=valid($_POST['name']);       // using function (valid) to secure the input
			$Age=valid($_POST['age']);
			
			//echo "$Name, $Age";

			include_once dirname(__FILE__).'/db_connect.php'; // set connection with the DB

			$sql= "INSERT INTO kindergarder.children (`Name`,Age,KinderGarderID)".

					"VALUES ('$Name','$Age','2');";

			$result=mysqli_query($connection,$sql);

			if ($result===TRUE){

				$insID=mysqli_insert_id($connection);
				echo "Вие успешно регистрирахте Вашето дете $Name - ID=$insID в ЦДГ \"Детски рай \" ! ";
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

	</div>





		<div id="form">

			<form action="request.php" method="post">


				<p>
					<span class='bold'>Име:</span>
					<span class='align'><input type="text" name="name" required /></span> 

				</p>

				<p>
					<span class='bold'>Възраст:</span>
					<span class='align width'><input type="number" name="age" required/></span>
				</p>

				<p>
					<input type="submit" value="Въведи" name="submit" />
				</p>

				<input type="hidden" name="check" value="1" />

			</form>

			
		</div>


<?php
	include_once dirname(__FILE__).'/footer.php';
	foot();
?>