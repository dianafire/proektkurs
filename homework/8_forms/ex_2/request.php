

<?php
	include_once dirname(_FILE_).'/header.php';
	$title='Registration';
	head($title);
?>
		
		<h1 class='center'> Registration form: </h1>

		<div id="form">

			<form action="response.php" method="post">

				<p><em>*Each field is required!</em></p>

				<p>
					<span class='bold'>Username*:</span>
					<span class='align'><input type="text" name="user" required /></span> 

				</p>

				<p>
					<span class='bold'>Password*:</span>
					<span class='align'><input type="password" name="pass" required/></span>

				</p>


				<p>
					<span class='bold'>Retype password*:</span>
					<span class='align'><input type="password" name="repass" required/></span>

				</p>


				<p>
					<span class='bold'>First name*:</span>
					<span class='align'><input type="text" name="fname" required/></span>

				</p>


				<p>
					<span class='bold'>Last name*:</span>
					<span class='align'><input type="text" name="lname" required/></span>

				</p>

				<p>
					<span class='bold'>E-mail*:</span>
					<span class='align'><input type="text" name="email" required/></span>

				</p>

				<p>
					<span class='bold'>Date of birth*:</span>
					<span class='align'><input type="date" name="bday" required/></span>

				</p>

				<p>
					<span class='bold'>Gender*:</span>
					<input type="radio" name="sex" value="male" /></span> Male
					<input type="radio" name="sex" value="female" checked/></span> Female
				</p>


				<p>
					<span class='bold'>Secret question*:</span>
					<span class='clear align'><textarea name="question" cols="40" placeholder="Question..." required></textarea></span>

				</p>
				
				<p class='margin'>
					<span class='bold'>Secret answer*:</span>
					<span class='clear align'><textarea name="answer" cols="40" placeholder="Answer..." required></textarea></span>

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