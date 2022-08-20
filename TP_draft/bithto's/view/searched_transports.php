<?php
	if(isset($_COOKIE['man'])) {
			if(isset($_POST['findtr'])) {
				$loc = $_POST['pickloc'];
				$dt = $_POST['pick_date'];
				$ACt = $_POST['ttype'];
				//$flag = 0;
?>
				<html>
				<head>
					<style type="text/css">
					tr, th{
						padding: 10px;
					}
					tr td{
						padding: 8px;
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
					<title>Transports</title>
				</head>
				<body>
					<label style="color: snow; font-size: 18px; line-height: 15px; padding: 0 20px; float: left;"><h3>Trip-Planner</h3></label>

					<nav>
						<ul style="float: right;">
							<li><h3><?php echo $_COOKIE['name']; ?>!</h3></li>
							<li><a href="mn_home.php"><b> Home </b></a></li>
							<li><a href="mn_profile.php"><b> Profile </b></a></li>
							<li><a href="../controller/logout_mn.php"><b> Logout </b></a></li>
						</ul>
					</nav>
					<center><fieldset style="width: 70%; margin-top: 15px;">
						<legend>Transports</legend>
							<table border="1" style="background-color: lightgrey;">
								<tr>
									<th>name</th>
									<th>location</th>
									<th>date</th>
									<th>cost</th>
									<th>route</th>
									<th>AC-type</th>
									<th>contact</th>
								</tr>
						<?php
								$file = fopen('../model/transports.txt', 'r');
								while (!feof($file)) {
										$data=fgets($file);
										if($data != null){
											$trans = explode('|', $data);

											if(strtolower($loc) == strtolower(trim(@$trans[1])) && $dt == trim(@$trans[2]) && $ACt == trim(@$trans[5])){
												
												$name = trim($trans[0]);
												$location = trim($trans[1]);
												$date = trim($trans[2]);
												$cost = trim($trans[3]);
												$route = trim($trans[4]);
												$ACtype = trim($trans[5]);
												$contact = trim($trans[6]);
												echo "<tr>";
												echo "<td>".$name."</td>";
												echo "<td>".$location."</td>";
												echo "<td>".$date."</td>";
												echo "<td>".$cost."</td>";
												echo "<td>".$route."</td>";
												echo "<td>".$ACtype."</td>";
												echo "<td>".$contact."</td>";
												echo "</tr>";
											
												}
										}

									}
								fclose($file);
								

						?>

				</table>
			</fieldset></center>
		</body>
		</html>
<?php
			}
			else{
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