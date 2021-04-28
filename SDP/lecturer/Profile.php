<!doctype html>
<?php
	session_start();
		if(!isset($_SESSION['lect_id'])){
		echo ("<script>alert('Oops! Please Log In First!')</script>");
		die("<script>;window.location.href='../Main Page/login.php';</script>");
	}
	?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Untitled Document</title>
	</head>
	<?php require "design/lec-navbar.php"?>
	<body style="background-color: rgba(0,0,0,0.1);">
		<div class="row bg-light">
			<?php require "design/lecnavtab-profile.php"?>
			<div class="col-md-9">
				<div class="container vh-130 bg-light card body">
				<h3 class="row justify-content-center font-weight-bold">Profile</h3>
				<br>
					<?php
					require "action/profile.php";
					?>
						<picture style="margin: 10px;">
					<?php echo "<img src='data:image;base64,".base64_encode($_SESSION['lect_pic'])."' height='300' width='200'  class='img-fluid img-thumbnail rounded mx-auto d-block' alt='' >";?>
				</picture>
				<br>
				<h5 class="row justify-content-center font-weight-bold">Lecturer ID</h5>
				<h5 class="row justify-content-center">
					<?php 
						echo $_SESSION['lect_id'];
					?>
				</h5>
				<br>
				<h5 class="row justify-content-center font-weight-bold">Name</h5>					
				<h5 class="row justify-content-center">
					<?php 
						echo $_SESSION["lect_name"];
					?>
				</h5>
				<br>
				<h5 class="row justify-content-center font-weight-bold">Date of Birth</h5>
				<h5 class="row justify-content-center">
					<?php 
						echo $_SESSION["lect_DOB"];
					?>
				</h5>
				<br>
				<h5 class="row justify-content-center font-weight-bold">Phone Number</h5>
				<h5 class="row justify-content-center">
					<?php 
						echo $_SESSION["lect_num"];
					?>
				</h5>
				<br>
				<h5 class="row justify-content-center font-weight-bold">Gender</h5>
				<h5 class="row justify-content-center">
					<?php 
						echo $_SESSION["lect_gender"];
					?>
				</h5>
				<br>
				<h5 class="row justify-content-center font-weight-bold">Email</h5>
				<h5 class="row justify-content-center">
					<?php 
						echo $_SESSION["lect_email"];
					?>
				</h5>
				<br>
				<h5 class="row justify-content-center font-weight-bold">Street</h5>
				<h5 class="row justify-content-center">
					<?php 
						echo $_SESSION["lect_street"];
					?>
				</h5>
				<br>
				<h5 class="row justify-content-center font-weight-bold">PostCode</h5>
				<h5 class="row justify-content-center">
					<?php 
						echo $_SESSION["lect_postcode"];
					?>
				</h5>
				<br>
				<h5 class="row justify-content-center font-weight-bold">City</h5>
				<h5 class="row justify-content-center">
					<?php 
						echo $_SESSION["lect_city"];
					?>
				</h5>
				<br>
				<h5 class="row justify-content-center font-weight-bold">State</h5>
				<h5 class="row justify-content-center">
					<?php 
						echo $_SESSION["lect_state"];
					?>
				</h5>
				<br>
				<h5 class="row justify-content-center font-weight-bold">Country</h5>
				<h5 class="row justify-content-center">
					<?php 
						echo $_SESSION["lect_country"];
					?>
				</h5>
					<br>
				</div>
			</div>
		</div>
	</body>
</html>