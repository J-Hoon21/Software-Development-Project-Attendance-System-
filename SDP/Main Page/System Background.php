<!DOCTYPE html>
<html>
	<head>
		<title>Attendance System Login</title>
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
	
	color: white
	}
	#introduce{
	font-family: Garamond;
	font-size: 19px;
	text-align: justify;
	color: white
	}
	.slideshow{
	webkit-animation-name: fade;
	webkit-animation-duration: 1.5s;
	animation-name: fade;
	animation-duration: 1.5s;
	display: flex;
	text-align: center;
    }
    @-webkit-keyframes fade {
    from {opacity: .4}
    to {opacity: 1}
    }
	@keyframes fade {
    from {opacity: .4}
    to {opacity: 1}
	}
	.dot {
     height: 25px;
     width: 25px;
     background-color: #ddd;
     border-radius: 50%;
     display: inline-block;
     }
	 .col-6, .col-5 {
		left: 35px;
	}
	</style>

	<body style="background-image: url('image/background.jpg'); background-size: cover; background-repeat: no-repeat; height: 100%">
	<div class="d-flex justify-content-center h-100">
		<div class="card" style="height: auto; margin: auto; width: 90%; background-color: rgba(0,0,0,0.5)">
			<div class="card-header d-flex justify-content-center h-100">
			<ul class="nav navbar-nav">
			<li class="nav-item">
				<img src="image/Logo-APU.png" width="75" height="75" alt="System logo" loading="lazy"></img>
				<a href="login.php">HOME</a>
				<a href="System operation.php">SYSTEM OPERATION</a>
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>ABOUT SYSTEM</b></a>
				<div class="dropdown-menu">
					<a href="System Background.php" class="dropdown-item"><b>System Background</b></a>
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
			<center><h1 style="color: white"> System Background </h1></center>
			<hr>
			<div class="row">
			<div class="col-6">
			<h3 id="header"><u>APU Attendance Management System</u></h3>
			<p id="introduce">Welcome to APU Attendance Management System. We offer this application to take attendance electronically 
		       and the records of the attendance are storing in a database. This application takes attendance electronically and the records of the attendance are storing in a database. 
			   JavaScript is adding to the application to improve the use of the system while MySQL used for the Application Database.
			   The system designed in a way that can differentiate the hours of theoretical and practical lessons since the rate of them. 
			   Thus, we offer user-friendly way for insertions, deletions, and changes of data in the system can do straightforward via the designed GUI.
			</p>
			</div>
			<div class="col-5">
			<div class ="slideshow">
			<img src="image/logo.jpg" width="500px" height="250px" alt="system logo"></img></div>
			<div class ="slideshow">
			<img src="image/img 1.png" width="500px" height="250px" alt="image 1"></img></div>
			<div class ="slideshow">
			<img src="image/img 2.png" width="500px" height="250px" alt="image 2"></img></div>
			<div class ="slideshow">
			<img src="image/img 3.jpg" width="500px" height="250px" alt="image 3"></img></div>
			<div class ="slideshow">
			<img src="image/img 4.png" width="500px" height="250px" alt="image 4"></img></div>
			<div class ="slideshow">
			<img src="image/img 5.jpg" width="500px" height="250px" alt="image 5"></img></div>
			<div class ="slideshow">
			<img src="image/img 6.jpg" width="500px" height="250px" alt="image 6"></img></div>
			<center>
			<span class="dot" onClick="currentDiv(1)"></span>
			<span class="dot" onClick="currentDiv(2)"></span>
			<span class="dot" onClick="currentDiv(3)"></span>
			<span class="dot" onClick="currentDiv(4)"></span>
			<span class="dot" onClick="currentDiv(5)"></span>
			<span class="dot" onClick="currentDiv(6)"></span>
			<span class="dot" onClick="currentDiv(7)"></span></center>
			</div></div>
			<br><br><br>
			
			<h3 id="header" class="row justify-content-center">System Functions</h3>
			<div class="container">
			<div class="row d-flex justify-content-center h-100">
			<div class="col-2">
			<div class="card" style="background-color: transparent">
			<img src="image/profile.jpg" class="card-img-top" alt="profile.jpg"></img>
			 <p class="card-text" style="text-align: center; color: white;">Individual Account (Confidentiality)</p>
			 </div>
			 </div>
			 
			 <div class="col-2">
			<div class="card" style="background-color: transparent">
			<img src="image/timetable.jpg" class="card-img-top" alt="timetable.jpg"></img>
			 <p class="card-text" style="text-align: center; color: white;">Weekly Timetable (Availability)</p>
			 </div>
			 </div>
			 
			<div class="col-2">
			<div class="card" style="background-color: transparent">
			<img src="image/attendance history.jpg" class="card-img-top" alt="attendance history.jpg"></img>
			 <p class="card-text" style="text-align: center; color: white;">Attendance History Record (Integrity)</p>
			 </div>
			 </div>
			 
			 <div class="col-2">
			<div class="card" style="background-color: transparent">
			<img src="image/EC.jpg" class="card-img-top" alt="EC.jpg"></img>
			 <p class="card-text" style="text-align: center; color: white;">Extenuating Circumstances (EC)</p>
			 </div>
			 </div>
			 
			 <div class="col-2">
			<div class="card" style="background-color: transparent">
			<img src="image/upcoming event.jpg" class="card-img-top" alt="upcoming event.jpg"></img>
			 <p class="card-text" style="text-align: center; color: white;">Notification</p>
			 </div>
			 </div>
			
		</div>
		</div>
		<script type="text/javascript" src="External/tab.js"></script>
		<script type="text/javascript" src="External/slideshow.js"></script>
	</body>
</html>
    