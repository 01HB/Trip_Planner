<?php
	
	if(isset($_COOKIE['man'])) {
		header('location: mn_home.php');
	}
	/*elseif (isset($_COOKIE['cl'])) {
		header('location: cl_home.php');	
	}*/
	else{
		session_start();
		if(isset($_SESSION['logerr'])){
			$logerr = $_SESSION['logerr'];
			session_destroy();
		}else{
			$logerr = "";
		}
?>
		<html>
		<head>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="../asset/css/login_style_tp.css">
			<title>Trip-Planner Manager-Login</title>
		</head>

		<body>

			<section id="login">
				<div class="login container">
					<div class="brand-logo">
						<h2>Trip-Planner</h2>
					</div>
					<form name="Loginform" method="post" action="../controller/logincheck.php" enctype="">
						<legend>Login</legend>
						<div class="line"></div>
						<div class="login-fields">
							
							<label for="uemail">Email</label>
							<div class="input-field">
								<input type="text" id="uemail" name="email" value="" placeholder="enter your email.." onkeyup="loginmailcheck()">
							</div>
							<p class="ue-error emsg"></p>
							<br>

							<div class="label-link">
								<label for="upass">Password</label>
								<a href="#">Forgot password?</a>
							</div>
							<div class="input-field">
								<input type="password" id="upass" name="password" value="" placeholder="enter your password.." onkeyup="loginpasscheck()">
							</div>
							<p class="up-error emsg"></p>
							<br>
							
							<div class="checkbox-content">
								<input type="checkbox" id="rem_login">
								<label for="rem_login">stay signed in</label>
							</div>
								
							<div class="bottom-line"></div>
							<div class="button input-field">
								<input type="submit" name="mn_login" value="Login" onclick="return loginVal()">
							</div>
							<p class="login-error emsg"><?php echo $logerr; ?></p>
							<br>
							<h3>don't have an account? <a href="mn_signup.php">Sign up</a></h3>
						</div>
					</form>
				</div>
			</section>


			<section id="footer">
				<div class="footer container">
					<div class="footer-items">
						<div class="item-links">
							<div class="item-link">
								<a href="#"><h3>Terms of services</h3></a>
							</div>
							<div class="item-link">
								<a href="#"><h3>Privacy policy</h3></a>
							</div>
							<div class="item-link">
								<a href="#"><h3>About</h3></a>
							</div>
						</div>

						<div class="social-icons">
							<div class="soc-icon">
								<a href="#"><img src="../asset/img/facebook-48.png"></a>
							</div>
							<div class="soc-icon">
								<a href="#"><img src="../asset/img/instagram-48.png"></a>
							</div>
							<div class="soc-icon">
								<a href="#"><img src="../asset/img/github-48.png"></a>
							</div>
						</div>
					</div>
					<div class="line"></div>
					<p>Copyright <?php echo date("Y"); ?> © Trip-Planner | All rights reserved</p>
				</div>
			</section>
				

			<script src="../asset/js/mnlogin_script.js"></script>
		</body>
		</html>
<?php
	}
?>