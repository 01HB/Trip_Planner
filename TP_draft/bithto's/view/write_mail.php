<?php
	
	if(isset($_COOKIE['man'])) {
		if(isset($_POST['msgadmin'])) {

			$recmail = $_POST['msgadmin'];


?>
				<html>
				<head>
					<style type="text/css">
						*{
						text-decoration: none;
						}
						nav{
							background: dimgrey;
							height: 70px;
							width: 100%;
						}
						nav ul li{
							display: inline-block;
							margin: 0px 90px;
							line-height: 0px;
						}
						nav ul li a{
							color: white;
							padding: 9px 13px;
							border-radius: 10px;
						}
					</style>
					<title>Trip-Planner Message Admin</title>
				</head>

				<body style="background-image: linear-gradient(30deg, slateblue 0%, white 100%);">
					<label style="color: snow; font-size: 18px; line-height: 15px; padding: 0 20px; float: left;"><h3>Trip-Planner</h3></label>

					<nav>
						<ul style="float: right;">
							<li><h3><?php echo $_COOKIE['name']; ?>!</h3></li>
							<li><a href="mn_home.php"><b> Home </b></a></li>
							<li><a href="mn_profile.php"><b> Profile </b></a></li>
							<li><a href="../controller/logout_mn.php"><b> Logout </b></a></li>
						</ul>
					</nav>
				<form method="post" action="../controller/mailtoadmincheck.php" enctype="" style="margin-top: 60px;">
				<center><fieldset style="width: 20%;">
					<legend><b><i>Write mail</i></b></legend>
						<table>
							<tr>
								<td>From:</td>
								<td><input type="email" name="sendermail" value=""></td>
							</tr>
							<tr>
								<td>To:</td>
								<td><input type="email" name="adminmail" value="<?=$recmail?>"></td>
							</tr>
							<tr>
								<td>Subject:</td>
								<td><input type="text" name="mailsub" value=""></td>
							</tr>
							<tr>
								<td>Message:</td>
								<td><textarea type="text" name="msgbody" value="" placeholder="Write your message.."></textarea></td>
							</tr>
						</table>
						<hr/>
						<table>
							<tr>
								<td style="width: 200px;"><br/><input type="submit" name="sendmail" value="send"></td>
							</tr>
						</table>
					</fieldset></center>
				</form>
			</body>
		</html>
<?php

		}else{
			echo "invalid request!!<br/><br/>";
		}
	}
	/*elseif (isset($_COOKIE['cl'])) {
		header('location: cl_home.php');	
	}*/
	else{
		header('location: login.php');
	}
?>