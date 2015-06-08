<?php

include_once (dirname(__FILE__).'/session.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Register</title>

<head>


<body>




	<?php 
		if(isset($_POST['register']) && isset($_POST['check']) && $_POST['check']=="1"){

			$user=valid($_POST['user']);       // using function (valid) to secure the input
			$pass=valid($_POST['pass']);
			$repass=valid($_POST['repass']);
			$email=valid($_POST['email']);
			
			$a;
			$b;
			$c;
			$d;
			$e;
			$f;

			$lenght_user=inputCheck($user);   // to check if the name contains the minimum required symbols
			if ($lenght_user>=3){
				$a=1;
			}
			else{
				echo "Минималната дължина на потребителското име е 3 символа!<br />";
				$a=0;
			}

			$lenght_pass=inputCheck($pass);  // to check if the pass contains the minimum required symbols
			if ($lenght_pass>=5){
				$b=1;
			}
			else{
				echo "Минималната дължина на потребителското име е 5 символа!<br />";
				$b=0;
			}


			$lenght_email=inputCheck($email); // to check if the repas contains the minimum required symbols
			if ($lenght_email>=8){
				$c=1;
			}
			else{
				echo "Минималната дължина на потребителското име е 8 символа!<br />";
				$c=0;
			}


			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {    // checks if of the email format input is valid
  				$emailErr = "Невалиден формат на email-а! <br />";
  				echo $emailErr;
  				$d=0;
			}
			else{
				$d=1;
			}

			if ($pass===$repass){     // checks if the pass matches the repass
				$e=1;
			}
			else{
				echo "Паролата и повторението не съвпадат!<br />";
				$e=0;
			}


			include_once (dirname(__FILE__).'/db_connect.php'); // ... check if the username exits in db

			$sql1="SELECT usName
				FROM new_shop.user;";

			$result1=mysqli_query($connection,$sql1);

			if (mysqli_affected_rows($connection)>0){

				while($row=mysqli_fetch_assoc($result1)){
					$usName=$row['usName'];

					if ($usName===$user){
						echo "Потребителското име вече съществува!<br />";
						echo "Моля, въведете друго!";
						$f=0;
					}

					else{
						$f=1;
					}


				}

			}



			if ( ($a==1) && ($b==1) && ($c==1) && ($d==1) && ($e==1) && ($f==1)){   // checks if the conditions above are all true

				//include_once (dirname(__FILE__).'/db_connect.php');

				$passHash=password_hash($pass, PASSWORD_DEFAULT);


				$sql="INSERT INTO `new_shop`.`user` (`usName`, `password`, `email`) 
					VALUES ('$user', '$passHash', '$email');";

				$result=mysqli_query($connection,$sql);


				if ($result===TRUE){
					echo "Успешна регистрация";
					$insIDUser=mysqli_insert_id($connection);
					echo "<form action='submitOrder.php' method='post'> <input type='submit' value='Поръчай продуктите' name='order' /> 
						<input type='hidden' name='idUser' value='$insIDUser' /> </form> ";

				}

				else {
					//echo "Възникна грешка: " . $sql1 . "<br>" . $connection->error;
					echo "Моля, опитайте пак!";
				}
			

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


		function inputCheck($arg){             // to check if the input contains the minimum required symbols

			$lenght=mb_strlen($arg,'UTF-8');

			return $lenght;

		}


	?>






	<form action="userRegister.php" method="post">

		<p> Потребителско име: <input type="text" name="user" required /> </p>

		<p> Парола:<input type="password" name="pass" required/> </p>
	
		<p> Повторение на паролата: <input type="password" name="repass" required/> </p>

		<p> E-mail: <input type="text" name="email" required/> </p>

		<p> <input type="submit" value="Регистрация" name="register" /> </p>

			<input type="hidden" name="check" value="1" />

	</form>





</body>
</html>