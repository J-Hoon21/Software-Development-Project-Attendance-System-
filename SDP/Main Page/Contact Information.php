<!DOCTYPE html>
<html>
	<head>
		<title>Contact Information</title>
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
    margin-left: 130px;
    left:15px;
	color: white;
	}
	p {
	font-family: Garamond;
    font-size: 19px;
    margin-left: 130px;
    left:15 px;
    text-align: justify;
	color: white;
	}
	.col-md-4 {
		left: 130px;
	}
	</style>

	<body style="background-image: url('image/background.jpg'); background-size: cover; background-repeat: no-repeat; height: 100%">
		<div class="card" style="height: auto; margin: auto; width: 90%; background-color: rgba(0,0,0,0.5)">
			<div class="card-header d-flex justify-content-center h-100">
			<ul class="nav navbar-nav">
			<li class="nav-item">
				<img src="image/Logo-APU.png" width="75" height="75" alt="System logo" loading="lazy"></img>
				<a href="login.php">HOME</a>
				<a href="System operation.php">SYSTEM OPERATION</a>
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">ABOUT SYSTEM</a>
				<div class="dropdown-menu">
					<a href="System Background.php" class="dropdown-item">System Background</a>
					<a href="Board of directors.php" class="dropdown-item">Board Of Directors</a>
			    </div>
				<div class="btn group mb-1"> <!--btn group to separate different dropdown-item from ABOUT SYSTEM and CONTACT-->
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>CONTACT</b></a>
				<div class="dropdown-menu">
					<a href="FAQs.php" class="dropdown-item">FAQs</a>
					<a href="Contact Information.php" class="dropdown-item"><b>Contact Information</b></a>
			    </div></div>
					<a href="Notice-template.php">NOTICE</a>
			</li>
			</ul>
			</div>
			
			<div class="card-body">
			<center><h1 style="color: white"> Contact Information </h1></center>
			<hr>
			<div class="row">
			<div class="col-md-4" style="text-align:center">
			<h3 id="header">University Location</h3>
			<iframe src="https://maps.google.com/maps?q=APU&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0;margin-left: 110px;" allowfullscreen></iframe></div>
		
			<div class="col-md-4">
			<h3 id="header">Contact Information</h3>
			<p><b>Phone</b></p>
			<p><i class="fa fa-phone" style="color:red"></i> +603 1234 5678</p>									
			<p><b>Fax</b></p>
			<p><i class="fa fa-fax" style='color:red'></i> +603 8765 4321</p>
			<p><b>Email</b></p>
			<p><i class="fa fa-envelope" style='color:red'></i> apuattendance@mail.com</p>
			</div></div><br>
		
			<div class="row">
			<div class="col-md-4" style="text-align:center">
			<h3 id="header">Office Location</h3>
			<p style="text-align:center"><i class="fa fa-briefcase" style='font-size:36px; color:red'></i><br>
			Asia Pacific University<br>
			Technology Park Malaysia<br>
			Bukit Jalil, Kuala Lumpur 57000<br>
			Malaysia</p>
			</div>
		
			<div class="col-md-4">
			<h3 id="header">Student Service</h3>
			<p> That is so great to hear! If you have any system issue or inquiries, please do not hesitate to contact us.</p>
			<p>You can also send us enquiries or feedback by filling out our contact form in the following link, and we'll engage you in the shortest possible time!</p>
			<p><i class="fa fa-envelope" style='color:red'></i> apu_studservice@gmail.com</p>
			</div></div>
	
			</div>
			</div>
			</body>
</html>
			
	
	