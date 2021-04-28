<!DOCTYPE html>
<html>
	<head>
		<title>System Operation</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
	</head>
	<style>
	a, a:hover {
		margin: 10px;
		text-decoration: none;
		color: white;
		background-color: transparent;
	}
	#header {
	font-family: Garamond;
	color: white;
	}
	</style>

	<body style="background-image: url('image/background.jpg'); background-size: cover; background-repeat: no-repeat; height: 100%">
	<div class = "d-flex justify-content-center h-100">
		<div class="card" style="height: auto; margin: auto; width:90%; background-color: rgba(0,0,0,0.5)">
			<div class="card-header d-flex justify-content-center h-100">
			<ul class="nav navbar-nav">
			<li class="nav-item">
				<img src="image/Logo-APU.png" width="75" height="75" alt="System logo" loading="lazy"></img>
				<a href="login.php">HOME</a>
				<a href="System operation.php"><b>SYSTEM OPERATION</b></a>
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">ABOUT SYSTEM</a>
				<div class="dropdown-menu">
					<a href="System Background.php" class="dropdown-item">System Background</a>
					<a href="Board of directors.php" class="dropdown-item">Board Of Directors</a>
			    </div>
				<div class="btn group mb-1"> <!--btn group to separate different dropdown-item from ABOUT SYSTEM and CONTACT-->
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">CONTACT</a>
				<div class="dropdown-menu">
					<a href="FAQs.php" class="dropdown-item">FAQs</a>
					<a href="Contact Information.php" class="dropdown-item">Contact Information</a>
			    </div></div>
					<a href="Notice-template.php">NOTICE</a>
			</li>
			</ul>
			</div>
			
			<div class="card-body">
			<center><h1 style="color: white"> System Operation </h1></center>
			<hr>
			<center><h3 id="header">Student Hierachy Chart</h3></center>
			<center><img src="image/student chart.png" width="60%" height="60%" alt="Student Hierachy Chart" ></img></center><br>
			<center><h3 id="header">Lecturer Hierachy Chart</h3></center>
			<center><img src="image/lecturer chart.png" width="60%" height="60%" alt="Lecturer Hierachy Chart" ></img></center><br>
			<center><h3 id="header">Staff Hierachy Chart</h3></center>
			<center><img src="image/staff chart.jpg" width="60%" height="60%" alt="Staff Hierachy Chart" ></img></center>
			</div>
			</div>
			</div>
	</body>
</html>