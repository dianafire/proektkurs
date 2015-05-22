
<!--NO NEED FOR THIS FILE AFTER CHANGING REQUEST.PHP FILE

<?php 

	/*include_once dirname(_FILE_). '/header.php';
	include_once dirname(_FILE_). '/footer.php';

	

	if(isset($_POST['submit'])){
		
		head();


		if (mb_strlen($_POST['user'],'UTF-8')=="0"){ // repeats checking of the value existence 
			$nameErr="Name is required! <br />";
			echo $nameErr;
		}
		else{

			$user=valid($_POST['user']); // makes the value secure
			$a=1;
		}
		

		if (mb_strlen($_POST['pass'],'UTF-8')=="0"){ 
			$passErr="Password is required! <br />";
			echo $passErr;
		}
		else{

			$pass=valid($_POST['pass']);
			$b=1;
		}

		if (mb_strlen($_POST['repass'],'UTF-8')=="0"){ 
			$repassErr="Retyping password is required! <br />";
			echo $repassErr;
		}
		else{

			$repass=valid($_POST['repass']);
			$c=1;
		}

		if (mb_strlen($_POST['fname'],'UTF-8')=="0"){ 
			$fnameErr="First name is required! <br />";
			echo $fnameErr;
		}
		else{

			$fname=valid($_POST['fname']);
			$d=1;
		}
		
		if (mb_strlen($_POST['lname'],'UTF-8')=="0"){ 
			$lnameErr="Last name is required! <br />";
			echo $lnameErr;
		}
		else{

			$lname=valid($_POST['lname']);
			$e=1;
		}
		
		if (mb_strlen($_POST['email'],'UTF-8')=="0"){ 
			$emailErr="Email is required! <br />";
			echo $emailErr;
		}
		else{

			$email=valid($_POST['email']);
			$f=1;
		}

		if (mb_strlen($_POST['bday'],'UTF-8')=="0"){ 
			$bdayErr="Date of birth is required! <br />";
			echo $bdayErr;
		}
		else{

			$bday=valid($_POST['bday']);
			$g=1;
		}

		if (mb_strlen($_POST['question'],'UTF-8')=="0"){ 
			$questErr="Question is required! <br />";
			echo $questErr;
		}
		else{

			$question=valid($_POST['question']);
			$h=1;
		}

		if (mb_strlen($_POST['answer'],'UTF-8')=="0"){ 
			$ansErr="Answer is required! <br />";
			echo $ansErr;
		}
		else{

			$answer=valid($_POST['answer']);
			$i=1;
		}
		
		$sex=$_POST['sex'];

		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {    // checking of the email format
  			$emailErr1 = "Invalid email format!";
  			echo $emailErr1;
		}
		else{
			$j=1;
		}

		if ($pass===$repass){
			$k=1;
		}
		else{
			echo "The password doesn't match the retype!";
		}

		if ( ($k==1) && ($a==1) && ($b==1) && ($c==1) && ($d==1) // checks if the pass matches the repass every variable is 
			&& ($e==1) && ($f==1) && ($g==1) && ($h==1) && ($i==1) && ($j==1)){   // and if every variable is secured and has a value

			echo "Successful registration!";
		}
			

		foot();

	}


	function valid($param){      // to secure input 

		$param=trim($param);
		$param=stripslashes($param);
		$param=htmlspecialchars($param);

		return $param;

	}



	

?>
