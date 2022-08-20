<?php
	if(isset($_COOKIE['man'])) {
		header('location: mn_home.php');
	}
	/*elseif (isset($_COOKIE['cl'])) {
		header('location: cl_home.php');	
	}*/
	else{
?>
		<html>
		<head>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="../asset/css/signup_style_tp.css">
			<title>Trip-Planner Manager Sign Up</title>
		</head>
		<body >
			
			<section id="signup">
				<div class="signup container">
					<div class="brand-logo">
						<h2>Trip-Planner</h2>
					</div>
					<form name="Signupform" method="post" action="../controller/mn_signupcheck.php" enctype="">
						<legend>Sign up</legend>
						<div class="line"></div>
						<div class="signup-fields">

							<div class="inline-fields">
								<div class="inline-field">
									<label for="sname">Username</label>
									<div class="input-field">
										<input type="text" id="sname" name="name" value="">
									</div>
									<p class="sname-error emsg"></p>
								</div>
								<div class="inline-field">
									<label for="semail">Email</label>
									<div class="input-field">
										<input type="email" id="semail" name="email" value="">
									</div>
									<p class="smail-error emsg"></p>
								</div>
							</div>
							<br>

							<div class="inline-fields">
								<div class="inline-field">
									<label for="spass">Password</label>
									<div class="input-field">
										<input type="password" id="spass" name="password" value="">
									</div>
									<p class="spass-error emsg"></p>
								</div>
								<div class="inline-field">
									<label for="sconfpass">Confirm password</label>
									<div class="input-field">
										<input type="password" id="sconfpass" name="conf_pass" value="">
									</div>
									<p class="scpass-error emsg"></p>
								</div>
							</div>
							<br>

							<div class="inline-fields">
								<div class="inline-field">
									<label for="sdob">Date of birth</label>
									<div class="input-field">
										<input type="date" id="sdob" name="dob" value="">
									</div>
									<p class="sdob-error emsg"></p>
								</div>
								<div class="inline-field">
									<label for="scontact">Contact no</label>
									<div class="input-field">
										<input type="number" id="scontact" name="contact" value="">
									</div>
									<p class="scont-error emsg"></p>
								</div>
							</div>
							<br>
							
							<div id="sgender" class="gen-input-field">
								<label for="sgender">Gender</label>
								<div class="gen-field"><input type="radio" id="male" name="gender" value="Male">
									<label class="gen-label" for="male">Male</label>
								</div>
								<div class="gen-field"><input type="radio" id="female" name="gender" value="Female">
									<label class="gen-label" for="female">Female</label>
								</div>
								<div class="gen-field"><input type="radio" id="others" name="gender" value="Others">
									<label class="gen-label" for="others">Others</label>
								</div>
							</div>
							<p class="sgen-error emsg"></p>
							<br>
	
							<div class="bottom-line"></div>
							<div class="button input-field">
								<input type="submit" name="mn_signup" value="Sign up" onclick="return signupVal()">
							</div>
							<p class="signup-error emsg"></p>
							<br/>
							<h3>already have an account? <a href="login.php">Login</a></h3>
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

			
			<script src="../asset/js/mnsignup_script.js"></script>
		</body>
		</html>
<?php
	}
?>