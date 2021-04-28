<?php
	session_start();
		if(!isset($_SESSION['lect_id'])){
		echo ("<script>alert('Oops! Please Log In First!')</script>");
		die("<script>;window.location.href='../Main Page/login.php';</script>");
	}
	?>
<!doctype html>
<html>
	<head>
	</head>
    <?php require "design/lec-navbar.php"?>
	<body style="background-color: rgba(0,0,0,0.1);">
	<div class="row bg-light">
	<?php require "design/lecnavtab-profile.php"?>
		<div class="container col-md-9 card body bg-light">
            <h3 class="row justify-content-center font-weight-bold">Change Password</h3>
			<br>
            <form class="justify-content-center" action="action/changepassword/php" method="post">
                <div class="form-group row">
                    <label class="col-3 col-form-label">Lecturer ID</label> 
                    <div class="col-8">
                    <input placeholder="Lecturer ID" class="form-control here" required="required" type="text" name="id">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-3 col-form-label">Old Password</label> 
                    <div class="col-8">
                        <input placeholder="Password" class="form-control here" type="text" name="oldpassword">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-3 col-form-label">New Password</label> 
                    <div class="col-8">
                        <input placeholder="Password" class="form-control here" type="text" name="newpassword">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-3 col-form-label">Confirm Password</label> 
                    <div class="col-8">
                        <input placeholder="Confirm Password" class="form-control here" type="password" name="confirmpassword">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                </div>
            </form>
		</div>
	</body>
</html>