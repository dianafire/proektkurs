
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Информация</title>

<head>


<body>

	<?php





	include_once dirname(_FILE_).'/db_connect.php';

	$sql="SELECT c.ChildID,c.`Name`,c.Age, k.`Name` AS kindergardenName,k.KinderGarderID

		FROM kindergarder.children AS c

		JOIN kindergarder.kindergarder AS k

		ON c.KinderGarderID=k.KinderGarderID

		ORDER BY c.`Name`;";


	$result=mysqli_query($connection,$sql);


	if (mysqli_affected_rows($connection)>0){

		echo "<table border=1>";
		echo "<tr>";
		echo "<td>ChildID</td>";
		echo "<td>Name</td>";
		echo "<td>Age</td>";
		echo "<td>kindergarden</td>";
		echo "<td>kindergardenID</td>";
		echo "<td>Редакция</td>";
		echo "<td>Изтриване</td>";
		echo "</tr>";

		while ($row=mysqli_fetch_assoc($result)){
			$childID=$row['ChildID'];
			$name=$row['Name'];
			$age=$row['Age'];
			$kindergardenName=$row['kindergardenName'];
			$kindergardenID=$row['KinderGarderID'];

			echo "<tr>";
			echo "<td>$childID</td>";
			echo "<td>$name</td>";
			echo "<td>$age</td>";
			echo "<td>$kindergardenName</td>";
			echo "<td>$kindergardenID</td>";
			echo "<td> <form action='update.php' method='post' target='_blank'> <input type='submit' value='Редактирай' name='submit1' /> 
			<input type='hidden' name='id' value='$childID' /> <input type='hidden' name='check' value='1' /> </form> </td>";
			echo "<td> <form action='delete.php' method='post' target='_blank'> <input type='submit' value='Изтрий' name='submit2'> 
			<input type='hidden' name='id' value='$childID' /> <input type='hidden' name='check' value='1' /> </form> </td>";
			echo "</tr>";

			
		}

		echo "</table>";

	}

	mysqli_close($connection);





	?>

</body>
</html>
