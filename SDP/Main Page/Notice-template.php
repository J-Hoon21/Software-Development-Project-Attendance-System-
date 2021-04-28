<!DOCTYPE html>
<html>
	<head>
		<title>Notice template</title>
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
    margin-left: 150px;
    left:15px;
	  color: white;
	}
	p {
	  font-family: Garamond;
    font-size: 18px;
    margin-left: 10px;
    text-align: center;
	  color: black;
	}
	.card{
   border-style: 200px;
	}
	.img{
		font-size: 200px;
	}

	</style>
	<body style="background-image: url('image/background.jpg'); background-size: cover; background-repeat: no-repeat; height: 100%">
	<div class = "d-flex justify-content-center h-100">
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
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">CONTACT</a>
				<div class="dropdown-menu">
					<a href="FAQs.php" class="dropdown-item">FAQs</a>
					<a href="Contact Information.php" class="dropdown-item">Contact Information</a>
			    </div></div>
					<a href="Notice-template.php"><b>NOTICE</b></a>
			</li>
			</ul>
			</div>

			<div class="card-body">
			<center><h1 style="color: white">Notice template</h1></center>
			<hr>
			<div class="container">
					<div class="row">
							<div class="col-4">
									<div class="card">
											<img src="image/covid.jpg" class="card-img-top">
											<div class="card-body">
												<p class="card-text">
														21 Jan 2021 Malaysia has logged another 3,170 new Covid-19 cases today.
														<p style="text-emphasis-position: center;"></p>
												</p>
											</div>
									</div>
							</div>
							<div class="col-4">
									<div class="card">
											<img src="image/competition.jpg" class="card-img-top">
											<div class="card-body">
												<p class="card-text">
														2 Mar 2021 The basketball match will be held on APU basketball court.
														<p style="text-emphasis-position: center;"></p>
												</p>
												<br>
												<br>
											</div>
									</div>
							</div>
							<div class="col-4">
									<div class="card">
											<img src="image/talk.jpg" class="card-img-top">
											<div class="card-body">
												<p class="card-text">
														2 Feb 2021 Kuala lumpur will be having a talk about I am a young entrepreneur.
														<p style="text-emphasis-position: center;"></p>
												</p>
											</div>
									</div>
							</div>
					</div>
			</div>
