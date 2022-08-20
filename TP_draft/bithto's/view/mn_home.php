<?php
	//session_start();
	if(isset($_COOKIE['man'])) 
	{
?>
			<html>
			<head>
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<link rel="stylesheet" href="../asset/css/home_style_tp.css">
				<title>Manager Home</title>
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
								<h1><?php echo $_COOKIE['name']; ?></h1>
								<ul>	
									<li><a href="mn_home.php" data-menu="Home">Home</a></li>
									<li><a href="mn_profile.php" data-menu="Profile">Profile</a></li>
									<li><a href="#" data-menu="Contact">Contact</a></li>
									<!-- <li><a href="#" data-menu="Settings">Settings</a></li> -->
									<li><a href="../controller/logout_mn.php" data-menu="Logout">Logout</a></li>
								</ul>
							</div>
						</div>
					</div>
				</section>
				
				<section id="home">
					<div class="home container">
						<div class="home-items">
							<div class="home-item">
								<div class="item-icon">
									<a href="manage_tg.php"><img src="../asset/img/management-48.png"></a>
								</div>
								<div class="item-name">
									<a href="manage_tg.php"><h3>Manage Travel Guides</h3></a>
								</div>
							</div>

							<div class="home-item">
								<div class="item-icon">
									<a href="#"><img src="../asset/img/booking-details-48.png"></a>
								</div>
								<div class="item-name">
									<a href="#"><h3>Manage Bookings</h3></a>
								</div>
							</div>

							<div class="home-item">
								<div class="item-icon">
									<a href="mn_transport_book.php"><img src="../asset/img/vehicles-48.png"></a>
								</div>
								<div class="item-name">
									<a href="mn_transport_book.php"><h3>Transports</h3></a>
								</div>
							</div>

							<div class="home-item">
								<div class="item-icon">
									<a href="#"><img src="../asset/img/reviews-48.png"></a>
								</div>
								<div class="item-name">
									<a href="#"><h3>Manage Reviews</h3></a>
								</div>
							</div>

							<div class="home-item">
								<div class="item-icon">
									<a href="#"><img src="../asset/img/payment-48.png"></a>
								</div>
								<div class="item-name">
									<a href="#"><h3>Payment</h3></a>
								</div>
							</div>
						</div>
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
					
					
				<script src="../asset/js/script_tp.js"></script>
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