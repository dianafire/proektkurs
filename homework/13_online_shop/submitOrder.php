<?php

	include_once (dirname(__FILE__).'/session.php');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Submit order</title>

<head>


<body>

<?php
	
	$name=valid($_POST['name']);
	$email=valid($_POST['email']);

	//echo "$name - $email";


	if ((mb_strlen($name,'UTF-8')>=3) && (mb_strlen($email,'UTF-8')>=8)) {

		if (empty($_SESSION['basket'])){
			echo "Вашата кошница е празна!Моля, изберете продукти!<br />";
			echo "<a href='main.php'>Обратно към продуктите в магазина</a>";
		}

		else {

			$hash=session_id();
			$orderCompl=1;

			include (dirname(__FILE__).'/db_connect.php');

			$sql="INSERT INTO accessories_shop.basket (Order_completed,Basket_session_hash,`Name`,Email)
				VALUES ( $orderCompl,'$hash','$name','$email')";


			$result=mysqli_query($connection,$sql);


			if ($result===TRUE){

				$insIDBasket=mysqli_insert_id($connection);
				//echo "yes - $insIDBasket <br/ >";

				foreach ($_SESSION['basket'] as $productID) {

					$sql1="INSERT INTO accessories_shop.basket_products (Basket_id,Product_id)
						VALUES ( $insIDBasket,$productID)";

					$result1=mysqli_query($connection,$sql1);


				}

				if ($result1===TRUE){
					echo "Вашата поръчка с ID $insIDBasket е приета! <br />";
					$_SESSION['basket']=array();
					echo "<a href='main.php'>Обратно към продуктите в магазина</a>";

				}

				else {
					echo "Възникна грешка с поръчката: " . $sql1 . "<br>" . $connection->error;
					echo "Моля, опитайте пак!";
				}


			} // if query

			else {
				echo "Възникна грешка с поръчката: " . $sql . "<br>" . $connection->error;
				echo "Моля, опитайте пак!";
			}

			mysqli_close($connection);

		}
	

	}

	else{
		echo "Моля, попълнете потребителско име не по-малко от 3 символа и email не по-малък от 8 символа! <br />";
		echo "<a href='order.php'>Обратно</a>";
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