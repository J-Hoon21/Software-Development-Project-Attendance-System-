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
	.tabcontent {
	webkit-animation-name: fade;
	webkit-animation-duration: 1.5s;
	animation-name: fade;
	animation-duration: 1.5s;
    }
	.col-5 i {
    margin-left: -30px;
    cursor: pointer;
}
	</style>

	<body style="background-image: url('image/background.jpg'); background-size: cover; background-repeat: no-repeat; height: 100%">
	<div class = "d-flex justify-content-center h-100">
		<div class="card" style="height: auto; margin: auto; width: auto; background-color: rgba(0,0,0,0.5)">
			<div class="card-header">
			<ul class="nav navbar-nav">
			<li class="nav-item">
				<img src="image/Logo-APU.png" width="75" height="75" alt="System logo" loading="lazy"></img>
				<a href="login.php"><b>HOME</b></a>
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
					<a href="Notice-template.php">NOTICE</a>
			</li>
			</ul>
			</div>
			
			<div class="card-body">
				<ul class="nav navbar-nav row">
				<li class="nav-item  ml-5">
					<a href="#" class="tablinks active" onclick="openTab(event, 'student')">Student</a>
					<a href="#" class="tablinks" onclick="openTab(event, 'lecturer')">Lecturer</a>
					<a href="#" class="tablinks" onclick="openTab(event, 'admin')">Administrator</a>
					<img src ="image/email_16.png" alt="Email" width="40px" height="40px" style="margin-left: 155px"></img>
					<img src ="image/rss_16.png" alt="Rss" width="40px" height="40px"></img>
					<img src ="image/twitter_16.png" alt="Twitter" width="40px" height="40px"></img>
				</li>
				</ul>
				<hr>
				
				
				<center><div id="student" class="tabcontent">
				<form method="post" action="../student/login-stud.php">
				<i><p style="font-size: 24px; color:white"> Student Sign In </p></i>
				<div class="form-group row justify-content-center">
				<img src ="image/id.jpg" alt="Email" width="50px" height="40px" class="mb-1"></img>
				<div class="col-5">
				<input type="text" class="form-control here" id="student ID" name="student_ID" placeholder="Student ID" required>
				</div></div>
				<div class="form-group row justify-content-center">
				<img src ="image/password.jpg" alt="Email" width="50px" height="40px" class="mb-1"></img>
				<div class="col-5">
				<input type="password" class="form-control here" id="student password" name="student_password" placeholder="Password" required>
				<i class="fa fa-eye" onclick="myFunctionS()" style="color:yellow"> Show Password</i> 
				</div></div><br>
				<input type="submit" value="LOGIN"></form><br>
				<a href="Contact Information.php" style="color:white;">Forget Password?</a>
				</div></center>
							
						
		
				<center><div id="lecturer" class="tabcontent" style="display : none">
				<form method="post" action="../lecturer/action/login-lec.php">
				<center><i><p style="font-size: 24px; color:white"> Lecturer Sign In </p></i></center>
				<div class="form-group row justify-content-center">
				<img src ="image/id.jpg" alt="Email" width="50px" height="40px" class="mb-1"></img>
				<div class="col-5">
				<input type="text" class="form-control here" id="lecturer ID" name="lecturer_ID"  placeholder="Lecturer ID" required>
				</div></div>
				<div class="form-group row justify-content-center">
				<img src ="image/password.jpg" alt="Email" width="50px" height="40px" class="mb-1"></img>
				<div class="col-5">
				<input type="password" class="form-control here" id="lecturer password" name="lecturer_password" placeholder="Password" required>
				<i class="fa fa-eye" onclick="myFunctionL()" style="color:yellow"> Show Password</i> 
				</div></div><br>
				<input type="submit" value="LOGIN"></form><br>
				<a href="Contact Information.php" style="color:white;">Forget Password?</a>
				</div></center>
		
				<center><div id="admin" class="tabcontent" style="display : none">
				<form method="post" action="../staff/action/login-staff.php">
				<center><i><p style="font-size: 24px; color:white"> Administrator Sign In </p></i></center>
				<div class="form-group row justify-content-center">
				<img src ="image/id.jpg" alt="Email" width="50px" height="40px" class="mb-1"></img>
				<div class="col-5">
				<input type="text" class="form-control here" id="admin ID" name="staff_ID" placeholder="Administrator ID" required>
				</div></div>
				<div class="form-group row justify-content-center">
				<img src ="image/password.jpg" alt="Email" width="50px" height="40px" class="mb-1"></img>
				<div class="col-5">
				<input type="password" class="form-control here" id="admin password" name="staff password"  placeholder="Password" required>
				<i class="fa fa-eye" onclick="myFunctionA()" style="color:yellow"> Show Password</i> 
				</div></div><br>
				<input type="submit" value="LOGIN"></form><br>
				<a href="Contact Information.php" style="color: white;">Forget Password?</a>
				</div></center>
				
				<br><br>
				<div class="card-footer" style="color: white; text-align: center">
				FOLLOW US<br>
				2020-2021<br>
				APU ATTENDANCE MATTER.,LTD.All Right Reserved.<br>
				System Design: Choong, Chong, Dallwin and Lee<br>
				</div>
	
			</div>
			</div>
			</div>
			<script type="text/javascript" src="External/tab.js"></script>
			</body>
</html>
			
	
	