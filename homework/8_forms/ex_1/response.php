
<?php 

	include_once dirname(_FILE_). '/header.php';
	include_once dirname(_FILE_). '/footer.php';

	$userDef='first-user';
	$passDef='money';


	if(isset($_POST['submit'])){
		
		head();

		if (($_POST['user']) && ($_POST['passOld'])  && ($_POST['passNew']) && ($_POST['repass']) ) {


			$user=htmlspecialchars(strip_tags($_POST['user']));
			$passOld=htmlspecialchars(strip_tags($_POST['passOld']));
			$passNew=htmlspecialchars(strip_tags($_POST['passNew']));
			$repass=htmlspecialchars(strip_tags($_POST['repass']));
		
			if (($user===$userDef)
			&&
				($passOld===$passDef)
			&&
				($passNew===$repass)){
				
					echo "Your password has been successfully changed!";
						
			}

			else{

					echo"Invalid input. ";

				if(($user!==$userDef)||($passOld!==$passDef)){
					echo "Wrong username or password! ";
				}

				if ($passNew!==$repass){
					echo "The new password doesn't match the retype!";
				}

			}



		}


		else{
			echo "Invalid input! You are missing an input!";
		}


		foot();

	}



	

?>
