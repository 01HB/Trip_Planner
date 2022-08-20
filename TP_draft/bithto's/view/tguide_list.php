<?php
		if(isset($_COOKIE['man'])) {

?>
		<html>
		<head>
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<link rel="stylesheet" href="style_tp.css">
			<style type="text/css">
				tr, th{
					padding: 10px;
				}
				tr td{
					padding: 8px;
					text-align: center;
				}
				
			</style>
			<title>Tour guides</title>
		</head>

		<body>
			
				<!-- navigation starts -->
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
				<!-- navigation ends -->


			<center><fieldset style="width: 60%;">
				<h2><i><legend align="center" style="background-color: aqua;">Available Tour Guides</legend></i></h2>
				<table border="1" style="background-color: lightgrey; width: 90%;">
					<tr>
						<th>Name</th>
						<th>Age</th>
						<th>Location</th>
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
									$exp = trim($tg[3]);
									$sche = trim($tg[4]);
									$stat = trim($tg[5]);
									echo "<tr>";
									echo "<td>".$name."</td>";
									echo "<td>".$age."</td>";
									echo "<td>".$loc."</td>";
									echo "<td>".$exp."</td>";
									echo "<td>".$sche."</td>";
									echo "<td>".$stat."</td>";
									echo "</tr>";
							}
						}
					
					?>
				</table>
			</fieldset></center>

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