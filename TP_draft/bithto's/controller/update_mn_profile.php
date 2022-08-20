<?php
	if(isset($_COOKIE['man'])) {
		if(isset($_POST['mn_update'])) {
		session_start();

		require_once "../model/manager_model.php";

		$name = $_POST['name'];
		$dob = $_POST['dob'];
		$gender = $_POST['gender'];
		$address = $_POST['address'];
		$exp = $_POST['exp'];
		$website = $_POST['website'];
		$cont = $_POST['contact'];

		$statusMsg = "";
		$profStatus = "";

		$targetDir = "../asset/files/";
		$fileName = basename($_FILES["dimage"]["name"]);
		$targetFilePath = $targetDir . $fileName;

		if(!empty($_FILES["dimage"]["name"])){

			$fileExt = pathinfo($targetFilePath, PATHINFO_EXTENSION);

			$allowedTypes = array('jpg','png','jpeg');
			if(in_array($fileExt, $allowedTypes)){

				if(move_uploaded_file($_FILES["dimage"]["tmp_name"], $targetFilePath)){

					$imgstat = updateProfImg($fileName, $_COOKIE['email']);

					if($imgstat){
						$statusMsg = "";
					}else{
						$statusMsg = "updating image failed<br/>";
					}
				}else{
					$statusMsg = "there was an error uploading image<br/>";
				}
			}else{
				$statusMsg = "only JPG, JPEG, PNG files are allowed<br/>";
			}

		}
		

			// ---------------------------------------------------------------------


			if(ctype_alpha($name[0]) && !str_contains($name,'$') && !str_contains($name,'*') && !str_contains($name,'|') ) {

					$dtob = date_create($dob);
					$dtc = date_create(date("d-M-Y"));
					$diff = date_diff($dtob,$dtc);
				if($diff->format("%R%a") >= 0 )
				{	
					$stat = updateProf($name, $_COOKIE['email'], $cont, $dob, $gender, $address, $exp, $website);
					
					if($stat){
						$profStatus = "profile has been updated";
						header('location: ../view/mn_profile.php');
					}else{
						$profStatus = "something wrong happened!";
						header('location: ../view/mn_profile.php');
					}

				}else{
					$profStatus = "invalid date of birth";
					header('location: ../view/mn_profile.php');
				}
			}else{
				$profStatus = "name must start with alphabets, cannot contain $, *, |";
				header('location: ../view/mn_profile.php');
			}

			$_SESSION['ProfUpdate'] = $statusMsg.$profStatus;

		}
		// else{
		// 	echo "invalid request!!<br/>";
		// }
	}
	/*elseif (isset($_COOKIE['cl'])) {
		header('location: cl_home.php');	
	}*/
	else{
		header('location: ../view/login.php');
	}

?>