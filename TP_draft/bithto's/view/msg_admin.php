<?php
	if(isset($_COOKIE['man'])) {
?>
	<html>
		<head>
			<style type="text/css">
				tr, th{
					padding: 10px;
				}
				tr td{
					padding: 8px;
					text-align: center;
				}
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
			<title>Contact Admins</title>
		</head>

		<body style="background-image: linear-gradient(60deg, darkslateblue 0%, #475548 100%);">
			<label style="color: snow; font-size: 18px; line-height: 15px; padding: 0 20px; float: left;"><h3>Trip-Planner</h3></label>

					<nav>
						<ul style="float: right;">
							<li><h3><?php echo $_COOKIE['name']; ?>!</h3></li>
							<li><a href="mn_home.php"><b> Home </b></a></li>
							<li><a href="mn_profile.php"><b> Profile </b></a></li>
							<li><a href="../controller/logout_mn.php"><b> Logout </b></a></li>
						</ul>
					</nav>
			<center><form method="post" action="write_mail.php">
				<fieldset style="width: 60%;">
				<h2><i><legend align="center" style="background-color: aqua;">Admins</legend></i></h2>
				<table border="1" style="background-color: lightgrey; width: 90%;">
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Communicate</th>

					</tr>
					<?php
						$file = fopen('../model/mn_adminlist.txt', 'r');
					
						while (!feof($file))
						{
							$data = fgets($file);
							if($data!= null)
							{
							$user = explode('|', $data);
									$name = trim($user[0]);
									$email = trim($user[1]);
									echo "<tr>";
									echo "<td>".$name."</td>";
									echo "<td>".$email."</td>";
									echo "<td><button type='submit' name='msgadmin' value='".$email."'>Message</button></td>";
									echo "</tr>";
							}
						}
							
					?>
					</table>
				</fieldset>
				</form></center>
			</body>
			</html>
			
	
<?php
	}
	/*elseif (isset($_COOKIE['cl'])) {
			header('location: cl_home.php');	
	}*/
	else{
		header('location: login.php');
	}
?>