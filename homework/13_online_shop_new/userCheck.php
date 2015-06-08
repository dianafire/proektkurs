<?php

include_once (dirname(__FILE__).'/session.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Login</title>

<head>


<body>

	<?php


		if(isset($_POST['login']) && isset($_POST['check']) && $_POST['check']=="1"){

			$user=valid($_POST['user']);       // using function (valid) to secure the input
			$pass=valid($_POST['pass']);

			
			include_once (dirname(__FILE__).'/db_connect.php'); 

			$sql="SELECT userID,usName,`password` 
				FROM new_shop.user
				WHERE usName='$user';"; 
			

			$result=mysqli_query($connection,$sql);
			$row=mysqli_fetch_assoc($result);

			$idUser=$row['userID'];
			$usName=$row['usName'];
			$hash=$row['password'];

			$passVerify=password_verify($pass,$hash);  // checks if the pass matches


			$sql1="SELECT count(*) AS usCount
				FROM new_shop.user
				WHERE usName='$user';";


			$result1=mysqli_query($connection,$sql1);
			$row1=mysqli_fetch_assoc($result1);
			$usCount=$row1['usCount'];


			if (($usCount==1)&&($passVerify==TRUE)){

				echo "Успешен вход в системата! <br />";
				echo "Здравейте, $usName! <br />";
				echo "<form action='submitOrder.php' method='post'> <input type='submit' value='Поръчай продуктите' name='order' /> 
						<input type='hidden' name='idUser' value='$idUser' /> </form> ";

			}

			else{
				echo "Грешно потребителско име или парола!<br />";
				echo "Моля, въведете отново данните!<br />";
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





	<form action="userCheck.php" method="post">

		<p> Потребителско име: <input type="text" name="user" required /> </p>

		<p> Парола:<input type="password" name="pass" required/> </p>

		<p> <input type="submit" value="Вход" name="login" /> </p>

			<input type="hidden" name="check" value="1" />

	</form>





</body>
</html>