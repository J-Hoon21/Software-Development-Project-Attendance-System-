<?php
session_start();
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Untitled Document</title>
	</head>

	<?php 
		require "../design/staff-navbar.php";
	?>
	<body>
		<div class="row bg-light">
			<div class="container vh-130 bg-light card body">
				<?php
					require "../action/profile.php";
				?>
				<picture style="margin: 10px;">
					<?php echo "<img src='data:image;base64,".base64_encode($_SESSION['staff_pic'])."' height='300' width='200'  class='img-fluid img-thumbnail rounded mx-auto d-block' alt='' >";?>
				</picture>
				<br>
				<h5 class="row justify-content-center font-weight-bold">Staff ID</h5>
				<h5 class="row justify-content-center">
					<?php 
						echo $_SESSION['staff_id'];
					?>
				</h5>
				<br>
				<h5 class="row justify-content-center font-weight-bold">Name</h5>					
				<h5 class="row justify-content-center">
					<?php 
						echo $_SESSION["staff_name"];
					?>
				</h5>
				<br>
				<h5 class="row justify-content-center font-weight-bold">Date of Birth</h5>
				<h5 class="row justify-content-center">
					<?php 
						echo $_SESSION["staff_DOB"];
					?>
				</h5>
				<br>
				<h5 class="row justify-content-center font-weight-bold">Phone Number</h5>
				<h5 class="row justify-content-center">
					<?php 
						echo $_SESSION["staff_num"];
					?>
				</h5>
				<br>
				<h5 class="row justify-content-center font-weight-bold">Gender</h5>
				<h5 class="row justify-content-center">
					<?php 
						echo $_SESSION["staff_gender"];
					?>
				</h5>
				<br>
				<h5 class="row justify-content-center font-weight-bold">Email</h5>
				<h5 class="row justify-content-center">
					<?php 
						echo $_SESSION["staff_email"];
					?>
				</h5>
				<br>
				<h5 class="row justify-content-center font-weight-bold">Street</h5>
				<h5 class="row justify-content-center">
					<?php 
						echo $_SESSION["staff_street"];
					?>
				</h5>
				<br>
				<h5 class="row justify-content-center font-weight-bold">PostCode</h5>
				<h5 class="row justify-content-center">
					<?php 
						echo $_SESSION["staff_postcode"];
					?>
				</h5>
				<br>
				<h5 class="row justify-content-center font-weight-bold">City</h5>
				<h5 class="row justify-content-center">
					<?php 
						echo $_SESSION["staff_city"];
					?>
				</h5>
				<br>
				<h5 class="row justify-content-center font-weight-bold">State</h5>
				<h5 class="row justify-content-center">
					<?php 
						echo $_SESSION["staff_state"];
					?>
				</h5>
				<br>
				<h5 class="row justify-content-center font-weight-bold">Country</h5>
				<h5 class="row justify-content-center">
					<?php 
						echo $_SESSION["staff_country"];
					?>
				</h5>
				<br>
			</div>
		</div>
	</body>
</html>