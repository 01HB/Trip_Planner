<?php
	if(isset($_COOKIE['man'])) {
		if(isset($_POST['sendmail'])) {
			
			$from = $_POST['sendermail'];
			$to = $_POST['adminmail'];
			$sub = $_POST['mailsub'];
			$msg = $_POST['msgbody'];
			$sender = "From: ".$from;

			mail($to, $sub, $msg, $sender);


		}else{
			echo "invalid request!!<br/><br/>";
		}
	}
	/*elseif (isset($_COOKIE['cl'])) {
		header('location: cl_home.php');	
	}*/
	else{
		header('location: ../view/login.php');
	}
?>