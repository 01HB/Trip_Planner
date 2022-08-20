<?php
		if(isset($_COOKIE['man'])) {
?>
			<html>
			<head>
				<style type="text/css">
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
				<title>Tour Guides Applications</title>
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
					<form method="post" action="tg_reg.php">
					<center><fieldset style="width: 60%; margin: 50px;">
					<legend align="center" style="background-color: skyblue; border-radius: 25px;"><h3><i>Applications to be Tour Guide</i></h3></legend>
					<table border="1" style="background-color: lightgrey; width: 90%;">
						<tr>
							<th>Name</th>
							<th>Age</th>
							<th>Location</th>
							<th>Email</th>
							<th>Experience</th>
							<th>Action</th>

							
						</tr>
							<?php
							
								$file = fopen('../model/tg_app_list.txt', 'r');
								while (!feof($file)) 
								{
									$Info=fgets($file);
									if($Info!= null)
									{
										$tg = explode('|', $Info);
											$name = trim($tg[0]);
											$age = trim($tg[1]);
											$loc = trim($tg[2]);
											$mail = trim($tg[3]);
											$exp = trim($tg[4]);
											echo "<tr>";
											echo "<td>".$name."</td>";
											echo "<td>".$age."</td>";
											echo "<td>".$loc."</td>";
											echo "<td>".$mail."</td>";
											echo "<td>".$exp."</td>";
											echo "<td><button type='submit' name='addtg' value='".$mail."'>Add</button></td>";
											echo "</tr>";
									}
								}
							
							?>
					</table>
				</fieldset></center>
				</form>	
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