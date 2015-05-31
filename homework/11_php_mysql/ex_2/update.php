<?php
	include_once dirname(_FILE_).'/header.php';
	$title='Редакция';
	head($title);


		$id=$_POST['id'];   // post from select.php
		//echo $id;

		echo "<h1 class='center'> Въведете новите данни за с номер ID=$id: </h1>";
		

	
?>
	<form action="update1.php" method="post">


				<p>
					<span class='bold'>Име:</span>
					<span class='align'><input type="text" name="name" required /></span> 

				</p>

				<p>
					<span class='bold'>Възраст:</span>
					<span class='align width'><input type="number" name="age" required/></span>

				</p>

				<p>
					<span class='bold'>Номер ID на ЦДГ:</span>
					<span class='align width'><input type="number" name="kinderganden" min="1" max="4" required/></span>

				</p>


				<p>
					<input type="submit" value="Въведи" name="submit" />
				</p>

				<input type="hidden" name="ChildID" value="<?php echo $id; ?>" />
				<input type="hidden" name="check1" value="1" />

	</form>


</body>
</html>





