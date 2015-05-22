

<?php
	include_once dirname(_FILE_).'/header.php';
	$title='Registration';
	head($title);
?>
		
		<h1 class='center'> Registration form: </h1>




	<div class="result">


	<?php 
		if(isset($_POST['submit']) && isset($_POST['check']) && $_POST['check']=="1"){

			$user=valid($_POST['user']);       // using function (valid) to secure the input
			$pass=valid($_POST['pass']);
			$repass=valid($_POST['repass']);
			$fname=valid($_POST['fname']);
			$lname=valid($_POST['lname']);
			$email=valid($_POST['email']);
			$bday=valid($_POST['bday']);
			$question=valid($_POST['question']);
			$answer=valid($_POST['answer']);
			$sex=$_POST['sex'];

			//echo "$user, $pass, $repass, fname, $lname, $email, $bday, $sex, $question, $answer";


			$lenght_user=inputCheck($user);   // to check if the name contains the minimum required symbols
			if ($lenght_user>=5){
				$a=1;
			}
			else{
				echo "Minimum required lenght of username is 5 characters!<br />";
			}

			$lenght_pass=inputCheck($pass);  // to check if the pass contains the minimum required symbols
			if ($lenght_pass>=5){
				$b=1;
			}
			else{
				echo "Minimum required lenght of password is 5 characters!<br />";
			}


			$lenght_repass=inputCheck($repass); // to check if the repas contains the minimum required symbols
			if ($lenght_repass>=5){
				$c=1;
			}
			else{
				echo "Minimum required lenght of repass is 5 characters!<br />";
			}

			// other input values don't need to be checked for lenght

			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {    // checks if of the email format input is valid
  				$emailErr = "Invalid email format! <br />";
  				echo $emailErr;
			}
			else{
				$d=1;
			}

			if ($pass===$repass){     // checks if the pass matches the repass
				$e=1;
			}
			else{
				echo "The password doesn't match the retype!<br />";
			}

			if ( ($a==1) && ($b==1) && ($c==1) && ($d==1) && ($e==1)){   // checks if the conditions above are all true

				echo "Successful registration!";
			}
			else{
				echo "<u>Go back and retype these fields!</u>";
			}
			


		}


		function valid($param){      // to secure input 

			$param=trim($param);
			$param=strip_tags($param);
			$param=addslashes($param);
			$param=htmlspecialchars($param);

			return $param;

		}


		function inputCheck($arg){             // to check if the input contains the minimum required symbols

			$lenght=mb_strlen($arg,'UTF-8');

			return $lenght;

		}


	?>

	</div>





		<div id="form">

			<form action="request.php" method="post">

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

				<input type="hidden" name="check" value="1" />

			</form>

			
		</div>


<?php
	include_once dirname(_FILE_).'/footer.php';
	foot();
?>