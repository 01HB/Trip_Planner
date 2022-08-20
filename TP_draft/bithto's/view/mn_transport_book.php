<?php
	if(isset($_COOKIE['man'])) {
?>
		<html>
		<head>
			<title>Transports</title>
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
			<form method="post" action="searched_transports.php" enctype="">
				<fieldset style="width: 15%; margin-top: 30px;">
					<legend>Search for transport</legend>
						<table>
								<tr>
									<td>location</td>
								</tr>
								<tr>
									<td><input type="text" name="pickloc" value="" ></td>
								</tr>
								<tr>
									<td>date</td>
								</tr>
								<tr>
									<td><input type="date" name="pick_date" value="" ></td>
								</tr>
								<tr>
									<td>type</td>
								</tr>
								<tr>
									<td>
										<input type="radio" name="ttype" value="AC" > AC
										<input type="radio" name="ttype" value="Non-AC" > Non-AC
									</td>
								</tr>
								<tr>
									<td>
										<input type="submit" name="findtr" value="Find">
									</td>
								</tr>
						</table>
				</fieldset>
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