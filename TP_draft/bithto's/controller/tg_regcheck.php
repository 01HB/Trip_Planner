<?php

	if(isset($_POST['newtg'])) {

	$name = $_POST['tgname'];
	$age = $_POST['tgage'];
	$location = $_POST['tgloc'];
	$mail = $_POST['tgmail'];
	$exp = $_POST['tgexp'];
	$sche = $_POST['tgsche'];
	$stat = $_POST['tgstat'];


	if($name == null || $age == null || $location == null || $mail == null || $exp == null || $sche == null || $stat == null){
		echo "empty fields!! all fields are required";
	}else{
			$flag=0;
					$nfile = fopen('../model/tguides_list.txt', 'r');
								while (!feof($nfile)) 
								{
									$Info=fgets($nfile);
									if($Info!= null)
									{
										$tg = explode('|', $Info);
										if($mail == trim($tg[3])){
											$flag=1;
											break;
										}
									}
								}


				if($flag==0){
					$file = fopen('../model/tguides_list.txt', 'a');
					$line = $name."|".$age."|".$location."|".$mail."|".$exp."|".$sche."|".$stat."\r\n";
					fwrite($file, $line);
					header('location: ../view/manage_tg.php');
				}else{
					echo "person already exists..";
				}
		}

	}
	else{
		echo "invalid request!!<br/><br/>";
	}

?>