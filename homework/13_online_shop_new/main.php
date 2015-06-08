<?php

include_once (dirname(__FILE__).'/session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Shop</title>

<head>


<body>

<?php


	//

	include_once (dirname(__FILE__).'/db_connect.php');

	//echo "OK";

	$sql="SELECT *
		FROM new_shop.product;";

	$result=mysqli_query($connection,$sql);


	if (mysqli_affected_rows($connection)>0){

		while($row=mysqli_fetch_assoc($result)){

			$id=$row['Product_id'];
			$product=$row['Name'];
			$price=$row['Price'];
			$path=getHost().'images/'.$row['Path'];

			echo "<img width='100' src='$path' />";
			echo "$product - $price лв.";
			echo "<form action='add.php' method='get'> <input type='submit' value='Добави в кошницата' name='add' /> 
			<input type='hidden' name='id' value='$id' /> <input type='hidden' name='check' value='1' /> </form> ";
			echo "<br />";

		}



	}

	echo "<a href='order.php'>Преглед на кошницата</a>";



?>

</body>
</html>