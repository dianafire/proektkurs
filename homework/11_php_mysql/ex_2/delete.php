<?php
	include_once dirname(_FILE_).'/header.php';
	$title='Изтриване';
	head($title);

		
	echo "<h1 class='center'> Изтриване на данни: </h1>";



		$id=$_GET['id'];   // post from select.php
		//echo $id;

		
		

	
?>
	<form action="delete1.php" method="post">


				<p>
					<span class='bold'>Искате да изтриете данните за дете с номер ID=<?php echo $id; ?>:</span> 

				</p>

				<p>
					<input type="radio" name="delete" value="yes" checked="checked" /> Да

				</p>

				<p>
					<input type="radio" name="delete" value="no"/> Не

				</p>


				<p>
					<input type="submit" value="Потвърди" name="submit" />
				</p>

				<input type="hidden" name="ChildID" value="<?php echo $id; ?>" />
				<input type="hidden" name="check1" value="1" />

	</form>
	
</div>

</body>
</html>








