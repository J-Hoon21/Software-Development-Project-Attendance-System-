<!doctype html>
<?php
	session_start();
		if(!isset($_SESSION['lect_id'])){
		echo ("<script>alert('Oops! Please Log In First!')</script>");
		die("<script>;window.location.href='../Main Page/login.php';</script>");
	}
	?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Untitled Document</title>
	</head>
	<?php require "design/lec-navbar.php"?>
	<body style="background-color: rgba(0,0,0,0.1);">
		<div class="row bg-light">
			<?php require "design/lecnavtab-profile.php"?>
			<div class="col-md-9">
				<div class="container vh-130 bg-light card body">
				<form method="post" action="action/editattendance.php">
					<h3 class="row justify-content-center font-weight-bold">Edit Attendance</h3><br>
				<table class="table">
					<thead>
						<tr>
							<th>Student ID</th>
							<th>Student Name</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
					
$date = $_GET["date"];				
$time = $_GET["start"];
$module = $_GET["module"];
//step 2: do connection to the database
include "../conn.php"; //link the conn.php info to here
//step 3: select and compare user from database whether user exist or not(since this is select)
$sql = "SELECT *
		FROM attendance A JOIN student S
		WHERE A.lect_id = '".$_SESSION['lect_id']."'
		AND A.attend_module = '$module'
		AND A.attend_date = '$date'
		AND A.start_time = '$time'
		AND A.student_id = S.student_id
		GROUP BY attend_id";
		
$result = mysqli_query($link, $sql);
		//Step 3 - Process result
		if(mysqli_affected_rows($link)>0){
		for ($i = 0; $i < mysqli_num_rows($result); $i++){
		$row  = mysqli_fetch_assoc($result);
		$status = $row['attend_status'];
		if ($status === "0") {
			$row['attend_status'] = "Absent";
			} else {
			$row['attend_status'] = "Present";
			}
		echo '<tr>';			
		echo '<td>'.$row['student_id'].'</td>';
		echo '<td>'.$row['student_name'].'</td>';
		echo '<td>'.$row['attend_status'].'</td>';
		echo '<td><a href = "action/editattendance.php?student_id='.$row['student_id'].'
														&status='.$row['attend_status'].'
														&date='.$_GET["date"].'
														&start='.$_GET["start"].'
														&module='.$_GET["module"].'"
														class="btn btn-sm btn-success">Change</a></td>';
		echo "</tr>"; 
		}
		}
?>
	</tbody>
	</table>
	
	
	
				</div>
			</div>
		</div>
	</body>
</html>