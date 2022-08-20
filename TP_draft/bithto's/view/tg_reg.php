<?php
	
	if(isset($_COOKIE['man'])) {
		if(isset($_POST['addtg'])) {

			$tgmail = $_POST['addtg'];

			//$name;
			//$age;
			//$loc;
			//$mail;
			//$exp;
			//$sche;
			//$stat;

			$file = fopen('../model/tg_app_list.txt', 'r');
					while (!feof($file)) 
					{
						$info=fgets($file);
						if($info!= null)
						{
							$tg = explode('|', $info);
							if($tgmail == trim($tg[3])) 
							{
								$name = trim($tg[0]);
								$age = trim($tg[1]);
								$loc = trim($tg[2]);
								$mail = trim($tg[3]);
								$exp = trim($tg[4]);
							}
						}
					}
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
					<title>Trip-Planner add tour guide</title>
				</head>

				<body style="background-image: linear-gradient(90deg, slateblue 0%, lightgray 100%);">
					<label style="color: snow; font-size: 18px; line-height: 15px; padding: 0 20px; float: left;"><h3>Trip-Planner</h3></label>

					<nav>
						<ul style="float: right;">
							<li><h3><?php echo $_COOKIE['name']; ?>!</h3></li>
							<li><a href="mn_home.php"><b> Home </b></a></li>
							<li><a href="mn_profile.php"><b> Profile </b></a></li>
							<li><a href="../controller/logout_mn.php"><b> Logout </b></a></li>
						</ul>
					</nav>
				<form method="post" action="../controller/tg_regcheck.php" enctype="" style="margin-top: 60px;">
				<center><fieldset style="width: 20%;">
					<legend><b><i>Add Tour Guide</i></b></legend>
						<table>
							<tr>
								<td>name</td>
							</tr>
							<tr>
								<td><input type="text" name="tgname" value="<?=$name?>"></td>
							</tr>
							<tr>
								<td>age</td>
							</tr>
							<tr>
								<td><input type="number" name="tgage" value="<?=$age?>"></td>
							</tr>
							<tr>
								<td>location</td>
							</tr>
							<tr>
								<td><input type="text" name="tgloc" value="<?=$loc?>"></td>
							</tr>
							<tr>
								<td>email</td>
							</tr>
							<tr>
								<td><input type="email" name="tgmail" value="<?=$mail?>"></td>
							</tr>
							<tr>
								<td>experience</td>
							</tr>
							<tr>
								<td><input type="text" name="tgexp" value="<?=$exp?>"></td>
							</tr>
							<tr>
								<td>schedule</td>
							</tr>
							<tr>
								<td><input type="text" name="tgsche" value=""></td>
							</tr>
							<tr>
								<td>status</td>
							</tr>
							<tr>
								<td><input type="text" name="tgstat" value=""></td>
							</tr>
						</table>
						<hr/>
						<table>
							<tr>
								<td style="width: 200px;"><br/><input type="submit" name="newtg" value="add"><a href=""></a></td>
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