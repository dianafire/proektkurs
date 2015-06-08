<?php

include_once (dirname(__FILE__).'/session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Basket</title>

<head>


<body>

<?php

	if (empty($_SESSION['basket'])){
		echo "Вашата кошница е празна!Моля, изберете продукти!<br />";
		echo "<a href='main.php'>Обратно към продуктите в магазина</a>";
	}
	
	else{


		$lenght=count($_SESSION['basket']);
		$productID;

		echo "<strong>Вие искате да поръчате:</strong><br />";

		include (dirname(__FILE__).'/db_connect.php');


	
		foreach ($_SESSION['basket'] as $productID) {
		

			$sql="SELECT *
				FROM new_shop.product
				where Product_id=$productID;"; 

			$result=mysqli_query($connection,$sql);


			if (mysqli_affected_rows($connection)>0){

				$row=mysqli_fetch_assoc($result);

				$id=$row['Product_id'];
				$product = $row['Name'];
				$price = $row['Price'];
				$path=getHost().'images/'.$row['Path'];


			
			echo "<img width='100' src='$path' />";
			echo "$product - $price лева<br />";

			echo "<form action='remove.php' method='get'> <input type='submit' value='Изтрий от кошницата' name='remove' /> 
			<input type='hidden' name='id' value='$id' /> <input type='hidden' name='check' value='1' /> </form> ";
			echo "<br />";

			} // if $connection

			

		}// loop


		echo "<a href='userCheck.php'>Поръчка за регистрирани потребители</a> <br /><br />";  // userChecking

		echo "<a href='userRegister.php'>Поръчка за нерегистрирани потребители</a>"; // userRegister

	}


	

	/*echo "<form action='submitOrder.php' method='post'><p>Потребителско име:<input type='text' name='name' required/></p>";
	echo "<p>Email:<input type='email' name='email' required /></p>";
	echo "<input type='submit' value='ПОРЪЧАЙ' name='order' /> 
		 <input type='hidden' name='check' value='1' /> </form>";*/


	
	


?>

</body>
</html>