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
			<?php require "design/lecnavtab-attendancehistory.php"?>
			<div class="col-md-9 card body">
				<br><br>
				<table class="table" id="AttendanceHistory">
					<thead>
						<tr>
							<th>Date</th>
							<th>Module</th>
							<th>Module Group</th>
							<th>Duration</th>
							<th>Start Time</th>
							<th>Overall</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						 //Step 1 - Establishing connection
						 include('../conn.php');
						//Step 2 - Execute SQL query
						$sql = "SELECT DISTINCT attend_date, attend_module, attend_group, attend_duration, start_time, lect_id
								FROM attendance
								WHERE lect_id = '".$_SESSION['lect_id']."'";
								
						$result = mysqli_query($link, $sql);
						//Step 3 - Process result
						if(mysqli_affected_rows($link)>0){
						for ($i = 0; $i < mysqli_num_rows($result); $i++){
						$row  = mysqli_fetch_assoc($result);
						
						
						//Step 4 - Calculate Number of Student Present
						$overall = "SELECT COUNT(*)
								    FROM attendance
									WHERE attend_date = '".$row['attend_date']."'
									AND attend_module = '".$row['attend_module']."'
									AND attend_group = '".$row['attend_group']."'
									AND start_time = '".$row['start_time']."'
									AND lect_id = '".$_SESSION['lect_id']."'
									AND attend_status='1'";
					    $result2 = mysqli_query($link, $overall);
						$row2  = mysqli_fetch_assoc($result2);
						
						//Step 5 - Total number of student in that particular module and time
						$total = "SELECT COUNT(*)
								    FROM attendance
									WHERE attend_date = '".$row['attend_date']."'
									AND attend_module = '".$row['attend_module']."'
									AND attend_group = '".$row['attend_group']."'
									AND start_time = '".$row['start_time']."'
									AND lect_id = '".$_SESSION['lect_id']."'";
					    
						$result3 = mysqli_query($link, $total);
						$row3  = mysqli_fetch_assoc($result3);
						
						
						echo '<tr>';
						echo '<td>'.$row['attend_date'].'</td>';
						echo '<td>'.$row['attend_module'].'</td>';	
						echo '<td>'.$row['attend_group'].'</td>';
						echo '<td>'.$row['attend_duration'].'</td>';
						echo '<td>'.$row['start_time'].'</td>';
						echo '<td>'.$row2['COUNT(*)'].'/'.$row3['COUNT(*)'].'</td>';
						echo '<td>
							<a href = "EditAttendance.php?date='.$row['attend_date'].'&start='.$row['start_time'].'&module='.$row['attend_module'].'" class="btn btn-sm btn-success">Edit</a> 
							<a href = "action/deleteattendance.php?date='.$row['attend_date'].'&start='.$row['start_time'].'&module='.$row['attend_module'].'" class="btn btn-sm btn-success">Delete</a> </td>';							
						}
						}
						?>          
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>