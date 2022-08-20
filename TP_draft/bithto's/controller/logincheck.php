<?php
	session_start();
	if(isset($_POST['mn_login'])) {

	$email = $_POST['email'];
	$password = $_POST['password'];
	$msg = "invalid email or password!";

	require_once "../model/manager_model.php";
	require_once "../model/db.php";

			$status = login($email, $password);

			if($status){
				$conn = getConnection();
				$sql = "select * from managers where memail='{$email}'";
				$result = mysqli_query($conn, $sql);
				$rowdata = mysqli_fetch_assoc($result);

				setcookie('name', trim($rowdata['musername']), time()+1801, '/');
				setcookie('email', $email, time()+1801, '/');
				setcookie('man', 'nothing', time()+1800, '/');
				header('location: ../view/mn_home.php');
			}
			else{
				$_SESSION['logerr'] = $msg;
				header('location: ../view/login.php');
			}

	}
	else{
		echo "invalid request!!<br/><br/>";
		echo "<a href=\"../view/login.php\">back to login</a>";
	}

?>