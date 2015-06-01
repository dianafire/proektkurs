<?php
	include_once dirname(__FILE__).'/header.php';
	include_once dirname(__FILE__).'/db_connect.php';
	$title='Редакция';
	head($title);


	$id=$_GET['id'];   // post from select.php
	//echo $id;

	echo "<h1 class='center'> Въведете новите данни за с номер ID=$id: </h1>";

	
	$sql = "SELECT * FROM kindergarder.children WHERE ChildID=$id";

	$result=mysqli_query($connection, $sql);

	if (mysqli_affected_rows($connection) == 0) {
		header('Location: select.php?error=not_found');
	}
	
	$data = mysqli_fetch_assoc($result);
?>
	<form action="update1.php" method="post">


				<p>
					<span class='bold'>Име:</span>
					<span class='align'><input type="text" name="name" value="<?=$data['Name']?>" required /></span> 

				</p>

				<p>
					<span class='bold'>Възраст:</span>
					<span class='align width'><input type="number" name="age" value="<?=$data['Age']?>" required/></span>

				</p>

				<p>
					<span class='bold'>Номер ID на ЦДГ:</span>
					<span class='align width'><input type="number" name="kinderganden" <?=$data['KinderGarderID']?> min="1" max="4" required/></span>

				</p>


				<p>
					<input type="submit" value="Въведи" name="submit" />
				</p>

				<input type="hidden" name="ChildID" value="<?php echo $id; ?>" />
				<input type="hidden" name="check1" value="1" />

	</form>


</body>
</html>





