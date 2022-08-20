<?php
	if(isset($_COOKIE['man']))
	{
		session_start();
		include "../controller/update_mn_profile.php";
		require_once "../model/db.php";

		$conn = getConnection();
		$sql = "select * from managers where memail='{$_COOKIE['email']}'";
		$result = mysqli_query($conn, $sql);
		$rowdata = mysqli_fetch_assoc($result);

		$name = $rowdata["musername"];
		$email = $rowdata["memail"];
		$dob = $rowdata["mdob"];
		$contact = $rowdata["mcontact"];
		$gender = $rowdata["mgender"];
		$website = $rowdata["mwebsites"];
		$address = $rowdata["maddress"];
		$exp = $rowdata["mexperience"];

		if(isset($_SESSION['ProfUpdate'])){
			$profmsg = $_SESSION['ProfUpdate'];
			unset($_SESSION['ProfUpdate']);
		}else{
			$profmsg = "";
		}
		
?>
		<html>
		<head>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="../asset/css/mnprofile_style_tp.css">
			<title>Manager Profile</title>
		</head>
		<body>
		
				<?php
					require "navpanel.php";
				?>

				<section id="profile">
					<div class="profile container">
						<form name="Profileform" method="post" action="../controller/update_mn_profile.php" enctype="multipart/form-data">
							<legend>Profile</legend>
							<div class="profile-fields">

								<p class="profile-error emsg"></p>
								<p class="prof-success smsg"><?php echo $profmsg; ?></p>

								<div class="image-container">
									<div class="wrapper">
										<div class="image">
											<?php

												if($rowdata["mn_image"] !== null){
													$imageURL = "../asset/files/".$rowdata["mn_image"];
												}else{
													$imageURL = "";
												}
											?>
											<img src="<?php echo $imageURL; ?>" alt=""/>
										</div>
										<div class="content">
											<div class="up-icon"><img src="../asset/img/upload-48.png"></div>
											<div class="text">Add your photo</div>
										</div>
										<!-- <div id="cancel-bttn"><img src="../asset/img/cross_64.png"></div> -->
									</div>
									<input type="file" id="default-up-bttn" name="dimage" hidden>
									<button id="custom-bttn">choose an image</button>
								</div>
								<br>

								<div class="inline-fields">
									<div class="inline-field">
										<label for="pname">Username</label>
										<div class="input-field">
											<input type="text" id="pname" name="name" value="<?=$name?>">
										</div>
										<p class="pname-error emsg"></p>
									</div>
									<div class="inline-field">
										<label for="pemail">Email</label>
										<div class="input-field">
											<!-- <input type="email" id="pemail" name="email" value=""> -->
											<h3 id="pemail" class="inputfield-text"><?php echo $email; ?></h3>
										</div>
										<p class="pmail-error emsg"></p>
									</div>
								</div>
								<br>

								<div class="inline-fields">
									<div class="inline-field">
										<label for="pdob">Date of birth</label>
										<div class="input-field">
											<input type="date" id="pdob" name="dob" value="<?=$dob?>">
										</div>
										<p class="pdob-error emsg"></p>
									</div>
									<div class="inline-field">
										<label for="pcontact">Contact no</label>
										<div class="input-field">
											<input type="number" id="pcontact" name="contact" value="<?=$contact?>">
										</div>
										<p class="pcont-error emsg"></p>
									</div>
								</div>
								<br>

								<div class="inline-fields">
									<div class="inline-field">
										<label for="pgender">Gender</label>
										<div class="input-field">
											<select id="pgender" name="gender">
												<option value="Male" id="pmale" <?php if($gender == "Male"){ echo "selected"; } ?>>Male</option>
												<option value="Female" id="pfemale" <?php if($gender == "Female"){ echo "selected"; } ?>>Female</option>
												<option value="Others" id="pothers" <?php if($gender == "Others"){ echo "selected"; } ?>>Others</option>
											</select>
										</div>
										<p class="pgen-error emsg"></p>
									</div>
									<div class="inline-field">
										<label for="pweb">Website</label>
										<div class="input-field">
											<input type="url" id="pweb" name="website" value="<?=$website?>">
										</div>
										<p class="pweb-error emsg"></p>
									</div>
								</div>
								<br>

								<div class="inline-fields">
									<div class="inline-field">
										<label for="paddress">Current address</label>
										<div class="text-field input-field">
											<textarea id="paddress" name="address"><?php echo $address; ?></textarea>
										</div>
										<p class="paddress-error emsg"></p>
									</div>
									<div class="inline-field">
										<label for="pexp">Experience</label>
										<div class="text-field input-field">
											<textarea id="pexp" name="exp"><?php echo $exp; ?></textarea>
										</div>
										<p class="pexp-error emsg"></p>
									</div>
								</div>
								<br>
		
								<div class="bottom-line"></div>
								<div class="button input-field">
									<input type="submit" name="mn_update" id="mnpro-up" value="Update Profile">
								</div>
								<br/>
							</div>
						</form>
					</div>
				</section>
			
				<?php
					require "footer.php";
				?>

				<script>

					// const cancelBttn = document.querySelector('#profile .wrapper #cancel-bttn');
					const form = document.forms['Profileform'];
					const wrapper = document.querySelector('#profile .wrapper');
					const content = document.querySelector('#profile .wrapper .content');
					const defaultBttn = document.querySelector('#profile #default-up-bttn');
					const customBttn = document.querySelector('#profile #custom-bttn');
					const img = document.querySelector('#profile .wrapper .image img');

					customBttn.addEventListener('click', (e)=>{
						e.preventDefault();
						defaultBttn.click();
					})

					defaultBttn.addEventListener('change', function(){
						const file = this.files[0];
						if(file){
							const reader = new FileReader();
							reader.onload = function(){
								const result = reader.result;
								img.src = result;
								wrapper.classList.add('current');
							}

							// cancelBttn.addEventListener('click', function(){
							// 	img.src = "";
							// 	wrapper.classList.remove('current');
							// })

							reader.readAsDataURL(file);
						}
					})
				</script>
				<script src="../asset/js/mnprof_script.js"></script>
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