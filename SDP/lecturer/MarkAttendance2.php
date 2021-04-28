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
	//Step1:Get the information from the form & $_POST[''] is refer to your input object name
	$modulename = $_POST['module_name'];
	$modulegroup = $_POST['module_group'];
	$date = $_POST['date'];
	$start = $_POST['start_time'];
	$duration = $_POST['duration'];
	$classtype = $_POST['class_type'];
	?>
	<?php require "design/lec-navbar.php"?>
	<body style="background-color: rgba(0,0,0,0.1);">
		<div class="row bg-light">
			<?php require "design/lecnavtab-profile.php"?>
				<div class="col-md-9">
				<div class="container bg-light card body">
					<form method="post" action="action/updateattendance.php">
					<h3 class="row justify-content-center font-weight-bold">Mark Attendance</h3><br>
					<h4 class="row justify-content-center font-weight-bold"><?php echo $modulename . ' ' . $modulegroup?></h4>
					<input type="hidden" name="module_name" value="<?php  echo $_POST['module_name']; ?>"> <!-- To import 1st page data to 3 page -->
					<h4 class="row justify-content-center font-weight-bold"><?php echo $date?></h4>
					<input type="hidden" name="module_group" value="<?php  echo $_POST['module_group']; ?>"> <!-- To import 1st page data to 3 page -->
					<input type="hidden" name="date" value="<?php  echo $_POST['date']; ?>"> <!-- To import 1st page data to 3 page -->
					<input type="hidden" name="start_time" value="<?php  echo $_POST['start_time']; ?>"> <!-- To import 1st page data to 3 page -->
					<input type="hidden" name="duration" value="<?php  echo $_POST['duration']; ?>"> <!-- To import 1st page data to 3 page -->
					<input type="hidden" name="class_type" value="<?php  echo $_POST['class_type']; ?>"> <!-- To import 1st page data to 3 page -->
					
					<br>
					<table class="table">
					<thead>
						<tr>
							<th>Student ID</th>
							<th>Student Name</th>
							<th>Course Name</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>

<?php

//step 2: do connection to the database
include "../conn.php"; //link the conn.php info to here
//step 3: select and compare user from database whether user exist or not(since this is select)
$sql = "SELECT *
		FROM student S JOIN course C JOIN module M
		WHERE M.module_name = '$modulename'
		AND M.module_group = '$modulegroup'
		AND M.lect_id = '".$_SESSION['lect_id']."'
		AND M.module_id = C.module_id
		AND M.module_group = C.module_group
		AND C.course_id = S.course_id;";
		
$result = mysqli_query($link, $sql);
		//Step 3 - Process result
		if(mysqli_affected_rows($link)>0){
		for ($i = 0; $i < mysqli_num_rows($result); $i++){
		$row  = mysqli_fetch_assoc($result);

		echo '<tr>';
		echo '<td><input type="hidden" name="student_id[]" value="'.$row['student_id'].'">'.$row['student_id'].'</td>';				
		echo '<td>'.$row['student_name'].'</td>';
		echo '<td>'.$row['course_name'].'</td>';
		echo "<td>";
		echo "<select name=attendance_status[] id=attendance_status>";
		echo "<option value=0>Absent</option>";
		echo "<option value=1>Present</option>";
		echo "</select>";
		echo "</td>";
		echo "</tr>"; 
		}
		}
?>
	</tbody>
	</table>
	<p class="row justify-content-center" style="color:red">*Reminder: No changes available except students' attend status after attendance taking</p>
		<div class="form-group row">
			<div class="offset-4 col-8">
			<button name="submit" type="submit" class="btn btn-primary">Update Attendance >>></button>
			</div>
			</form>
	    </div>