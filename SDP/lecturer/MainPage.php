<?php
session_start();
?>
<!doctype html>
	<html>
	<head>
		<style>
			.container{
				box-shadow: 30px 0px 40px rgba(0,0,0,0.1),/*horizontal vertical and blur*/
				-30px 0px 40px rgba(0,0,0,0.1)
			}
			.btn{
				margin: 5px auto;
			}
			
			@media screen and (max-width: 600px) {
				#title {
					font-size: 30px;
				}
			}
		</style>
	</head>
		
	<?php require "design/lec-navbar.php"?>
	<br>
	<body>
		<div class="container bg-light card-body">
		<?php
		require "action/profile.php";
		?>
			<picture style="margin: 10px;">
			<?php echo "<img src='data:image;base64,".base64_encode($_SESSION['lect_pic'])."' height='300' width='200'  class='img-fluid img-thumbnail rounded mx-auto d-block' alt='' >";?>
			</picture>
			<br>
			<h3 class="row justify-content-center">
				<strong>Welcome</strong>
			</h3>
			<br>
			<div class="row justify-content-center bg-danger">
				<h1 id="title">Welcome Back !</h1>
			</div>
			<div class="row text-center" style="margin:10px;">
				<a class="btn btn-lg btn-secondary col-12 col-sm-5" href="Timetable.php">View Timetable</a>
				<a class="btn btn-lg btn-secondary col-12 col-sm-5" href="Attendancehistory.php">Manage Attendance History</a>
				<a class="btn btn-lg btn-secondary col-12 col-sm-5" href="Notification.php">View Notification</a>
				<a class="btn btn-lg btn-secondary col-12 col-sm-5" href="Studentec.php">Manage Student External Circumstances (EC)</a>
				<a class="btn btn-lg btn-secondary col-12 col-sm-5" href="Mark Attendance.php">Mark New Attendance</a>
			</div>	
		</div>
	</body>
</html>