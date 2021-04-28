<title>Attendance System</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<link rel="stylesheet" href="../bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="../all.min.css" type="text/css">
<script src="../jquery-3.5.1.min.js" type="text/javascript"></script>
<script src="../bootstrap.min.js" type="text/javascript"></script>

<nav class="navbar navbar-expand-md navbar-light bg-light border-bottom" style="padding: 0 30px;">
	<img class="img-fluid" src="../img/Logo-APU.png" style="max-height:80px;">
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div id="navbarCollapse" class="collapse navbar-collapse">
		<ul class="nav navbar-nav mr-auto">
			<li class="nav-item">
				<a href="MainPage.php" class="nav-link">Home</a>
			</li>
		</ul>
		<ul class="nav navbar-nav ml-auto">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown">Setting</a>
				<div class="dropdown-menu dropdown-menu-right" id="DropList">
					<a href="Profile.php" class="dropdown-item">Profile</a>
					<a href="ChangePassword.php" class="dropdown-item">Change Password</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" id="btnlogout" href="../action/logout.php">Logout</a>
				</div>
			</li>
		</ul>
	</div>
</nav>
		