<?php
				
		//session_start();
		//session_destroy();
		setcookie('man', 'nothing', time()-1000, '/');
		header('location: ../view/login.php');

?>