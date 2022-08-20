<?php

	if(isset($_POST['mn_signup'])) {

	if(isset($_POST['gender'])) {

	$name = $_POST['name'];
	$email = $_POST['email'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$pass = $_POST['password'];
	$confpass = $_POST['conf_pass'];
	$contact = $_POST['contact'];
	$exp = $_POST['exp'];
	$website = $_POST['website'];

	require_once "../model/manager_model.php";
	require_once "../model/db.php";

	if($name == null || $email == null || $dob == null || $pass == null || $confpass == null || $contact == null){
		echo "Required fields cannot be empty!!";
	}
	else{

			$flag=0;
			$conn = getConnection();
			$sql = "select * from managers where memail='{$email}'";
			$res = mysqli_query($conn, $sql);
			$count = mysqli_num_rows($res);
				
				if($count > 0){
					$flag=1;
				}

		if($flag==0)
		{

		if(ctype_alpha($name[0]) && !str_contains($name,'$') && !str_contains($name,'*') ) {
			if(str_contains($email,'@') && str_contains($email,'.') && !str_contains($email,' ') && !str_contains($email,'|')) 
			{
					$dtob = date_create($dob);
					$dtc = date_create(date("d-M-Y"));
					$diff = date_diff($dtob,$dtc);
				if($diff->format("%R%a") >= 0 )
				{
					if(strlen($pass)>=8 && !str_contains($pass,'|'))
					{
						if($pass == $confpass) 
						{
							$stat = signup($name, $pass, $email, $contact, $dob, $gender, $address, $exp, $website);
							
							if($stat){
								header('location: ../view/login.php');
							}else{
								echo "something wrong happened!!<br/><br/>";
								echo "<a href=\"../view/mn_signup.php\">back to signup</a>";
							}

						}else{
							echo "password doesn't match..<br/>";
						}

					}else{
						echo "password must contain 8 or more characters..<br/>";
					}
				}else{
					echo "invalid date of birth..<br/>";
				}
			}else{
				echo "invalid email..<br/>";
			}
		}else{
			echo "name must start with alphabets..<br/>";
		}

		}else{
			echo "user already exists..";
		}


		}
	}
	else{
			echo "Required fields cannot be empty!!";
		}

	}
	else{
		echo "invalid request!!<br/><br/>";
		echo "<a href=\"../view/mn_signup.php\">back to signup</a>";
	}

?>