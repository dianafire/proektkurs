

<?php
	include_once dirname(_FILE_).'/header.php';
	head();
?>
		
		<h1> Change your password here: </h1>

		<div id="form">

			<form action="response.php" method="post">

				<p>
					<span class='bold'>Username:</span>
					<span class='align'><input type="text" name="user" /></span>

				</p>

				<p>
					<span class='bold'>Old password:</span>
					<span class='align'><input type="password" name="passOld" /></span>

				</p>


				<p>
					<span class='bold'>New password:</span>
					<span class='align'><input type="password" name="passNew" /></span>

				</p>

				<p>
					<span class='bold'>Retype the new password:</span>
					<input type="password" name="repass" />

				</p>

				<p>
					<input type="submit" value="Submit" name="submit" />
				<p>

			</form>

			
		</div>

<?php
	include_once dirname(_FILE_).'/footer.php';
	foot();
?>