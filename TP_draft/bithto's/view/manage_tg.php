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
					
					/* div ul li{
						display: block;
						float: right;
						margin: 10px 50px;
					} */
				</style>
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<link rel="stylesheet" href="style_tp.css">
				<title>Manage Tour Guides</title>
			</head>

			<body>

				<section id="nav-panel">
					<div class="nav-panel container">
						<div class="nav-bar">
							<div class="nav-logo">
								<a href="mn_home.php"><h2>Trip-Planner</h2></a>
							</div>
							<div class="nav-list">
								<div class="hamburger"><div class="bar"></div></div>
								<ul>
									<li><h1><?php echo $_COOKIE['name']; ?></h1><br/></li>
									<li><a href="mn_home.php" data-menu="Home">Home</a></li>
									<li><a href="mn_profile.php" data-menu="Profile">Profile</a></li>
									<li><a href="#" data-menu="Contact">Contact</a></li>
									<li><a href="#" data-menu="About">About</a></li>
									<li><a href="../controller/logout_mn.php" data-menu="Logout">Logout</a></li>
								</ul>
							</div>
						</div>
					</div>
				</section>	


					<div>
						<ul>
							<li><a href="tg_applications.php">Tour Guide Applications</a></li>
							<!--<li><a href="assign_tg.php">Assign Tour Guide</a></li>-->
						</ul>
					</div>

				<section>

					<center><fieldset style="width: 60%; margin: 50px;">
					<h2><i><legend align="center" style="background-color: aqua;">Available Tour Guides</legend></i></h2>
					<table border="1" style="background-color: lightgrey; width: 90%;">
						<tr>
							<th>Name</th>
							<th>Age</th>
							<th>Location</th>
							<th>Email</th>
							<th>Experience</th>
							<th>Schedule</th>
							<th>Status</th>
						</tr>
							<?php
							
								$file = fopen('../model/tguides_list.txt', 'r');
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
											$sche = trim($tg[5]);
											$stat = trim($tg[6]);
											echo "<tr>";
											echo "<td>".$name."</td>";
											echo "<td>".$age."</td>";
											echo "<td>".$loc."</td>";
											echo "<td>".$mail."</td>";
											echo "<td>".$exp."</td>";
											echo "<td>".$sche."</td>";
											echo "<td>".$stat."</td>";
											echo "</tr>";
									}
								}
							
							?>
					</table>
					</fieldset></center>
				</section>

				<script src="../controller/script_tp.js"></script>
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