<!doctype html>
<html>
	<head>
	</head>
	<?php
	session_start();
		if(!isset($_SESSION['lect_id'])){
		echo ("<script>alert('Oops! Please Log In First!')</script>");
		die("<script>;window.location.href='../Main Page/login.php';</script>");
	}
	?>
	<?php require "design/lec-navbar.php"?>
	<body style="background-color: rgba(0,0,0,0.1);">
		<div class="row bg-light">
			<?php require "design/lecnavtab-profile.php"?>
				<div class="col-md-9">
				<div class="bg-light card body">
					<h3 class="row justify-content-center font-weight-bold">Mark Attendance</h3>
					<br>
					<form method="post" action="MarkAttendance2.php">
						<div class="form-group row">
							<label class="col-3 col-form-label">Module Name</label> 
							<div class="col-8">
							<select class="custom-select form-control" name="module_name" required>
							<option value="">--Module Name--</option>
						<?php 			             
					    //Step 1 - Establishing connection
						 include('../conn.php');
						//Step 3 - Execute SQL query
						$sql = "SELECT module_name FROM module WHERE lect_id = '".$_SESSION['lect_id']."' GROUP BY module_id";
						$result = mysqli_query($link, $sql);
						//Step 4 - Process result
						if(mysqli_affected_rows($link)>0){
						for ($i = 0; $i < mysqli_num_rows($result); $i++){
						$row  = mysqli_fetch_assoc($result);
						echo '<option>'.$row['module_name'].'</option>';
						}
						}
						?>
						</select>
					    </div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Module Group</label> 
							<div class="col-8">
								<select class="custom-select form-control" name="module_group" required>
							<option value="">--Module Group--</option>
						<?php 			             
					    //Step 1 - Establishing connection
						 include('../conn.php');
						//Step 3 - Execute SQL query
						$sql = "SELECT DISTINCT module_group FROM module WHERE lect_id = '".$_SESSION['lect_id']."'";
						$result = mysqli_query($link, $sql);
						//Step 4 - Process result
						if(mysqli_affected_rows($link)>0){
						for ($i = 0; $i < mysqli_num_rows($result); $i++){
						$row  = mysqli_fetch_assoc($result);
						echo '<option>'.$row['module_group'].'</option>';
						}
						}
						?>
						</select> 
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Date</label> 
							<div class="col-8">
								<input class="form-control here" type="date" name="date" required> 
							</div>
						</div>
						<div class="form-group row">
					    <label class="col-3 col-form-label">Start Time</label> 
						<div class="col-8">
						<input class="form-control here" type="time" name="start_time" required>
							</div>
						</div>
					    <div class="form-group row">
					    <label class="col-3 col-form-label">Duration</label> 
						<div class="col-8">
							<select class="custom-select form-control" name="duration" required>
									<option value="">--Duration--</option>
									<option value="1h">1 hour</option>
									<option value="1h30m">1 hour 30 minutes</option>
									<option value="2h">2 hours</option>
									<option value="2h30m">2 hours 30 minutes</option>
									<option value="3h">3 hours</option>
									<option value="3h30m">3 hours 30 minutes</option>
									<option value="4h">4 hours</option>
									<option value="4h30m">4 hours 30 minutes</option>
									<option value="5h">5 hours</option>
									<option value="5h30m">5 hours 30 minutes</option>
									<option value="6h">6 hours ++ </option>
								</select>
					    </div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Class Type</label> 
							<div class="col-8">
								<select class="custom-select form-control" name="class_type" required>
									<option value="">--Class Type--</option>
									<option value="lecture">Lecture</option>
									<option value="tutorial">Tutorial</option>
									<option value="lab">Lab</option>
								</select>
							</div>
						</div>
						<p class="row justify-content-center" style="color:red">*Reminder: No changes available except students' attend status after attendance taking</p>
					    <div class="form-group row">
							<div class="offset-4 col-8">
								<button name="submit" type="submit" class="btn btn-primary">Proceed >>></button>
							</div>
					    </div></form>
						</div></div>