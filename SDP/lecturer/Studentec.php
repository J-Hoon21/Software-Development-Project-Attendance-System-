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
			<?php require "design/lecnavtab-studentec.php"?>
				<div class="col-md-9  card body">
				<div class="row">
					<a class="btn btn-lg btn-light ml-2 tablinks active" onclick="openTab(event, 'new')">New</a>
					<a class="btn btn-lg btn-light ml-2 tablinks" onclick="openTab(event, 'accepted')">Accepted</a>
					<a class="btn btn-lg btn-light ml-2 tablinks" onclick="openTab(event, 'rejected')">Rejected</a>
				</div>
				<br><br>
				<div id="new" class="tabcontent">
				<table class="table">
					<thead>
						<tr style="text-align: center">
							<th>Student</th>
							<th>Course</th>
							<th>Upload Date</th>
							<th>EC Reason</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody style="text-align: center">
						<?php
			             //Step 1 - Establishing connection
						 include('../conn.php');
						//Step 2 - Handling connection error
						//Step 3 - Execute SQL query
						$sql = "SELECT * 
								FROM ec E JOIN student S JOIN course C
								WHERE E.EC_Status = '2'
								AND E.student_id = S.student_id
								AND S.course_id = C.course_id
								AND E.lect_id = '".$_SESSION['lect_id']."'
								GROUP BY EC_id";
						$result = mysqli_query($link, $sql);
						//Step 4 - Process result
						if(mysqli_affected_rows($link)>0){
						for ($i = 0; $i < mysqli_num_rows($result); $i++){
						$row  = mysqli_fetch_assoc($result);
					echo '<tr>';
					echo '<td>'.$row['student_id'].'<br>'.$row['student_name'].'</td>';
					echo '<td>'.$row['course_id'].'<br>'.$row['course_name'].'</td>';
					echo '<td>'.$row['EC_date'].'</td>';					
					echo '<td>'.$row['EC_reason'].'</td>';
					echo '<td><a href = "action/acceptec.php?EC_id='.$row['EC_id'].'" class="btn btn-sm btn-success">Accept</a> 
							<a href = "action/rejectec.php?EC_id='.$row['EC_id'].'" class="btn btn-sm btn-success">Reject</a></td>';
				}
			}
			
			//Step 5 - Free resource & close connection
			mysqli_free_result($result);
			mysqli_close($link);

			?>      
					</tbody>
				</table>
				</div>
				
				<div id="accepted" class="tabcontent" style="display: none">
				<table class="table">
					<thead>
						<tr style="text-align: center">
							<th>Student</th>
							<th>Course</th>
							<th>Upload Date</th>
							<th>EC Reason</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody style="text-align: center">
						<?php
			             //Step 1 - Establishing connection
						 include('../conn.php');
						//Step 2 - Handling connection error
						//Step 3 - Execute SQL query
						$sql = "SELECT * 
								FROM ec E JOIN student S JOIN course C
								WHERE E.EC_Status = '1'
								AND E.student_id = S.student_id
								AND S.course_id = C.course_id
								AND E.lect_id = '".$_SESSION['lect_id']."'
								GROUP BY EC_id";
						$result = mysqli_query($link, $sql);
						//Step 4 - Process result
						if(mysqli_affected_rows($link)>0){
						for ($i = 0; $i < mysqli_num_rows($result); $i++){
						$row  = mysqli_fetch_assoc($result);
					echo '<tr>';
					echo '<td>'.$row['student_id'].'<br>'.$row['student_name'].'</td>';
					echo '<td>'.$row['course_id'].'<br>'.$row['course_name'].'</td>';
					echo '<td>'.$row['EC_date'].'</td>';					
					echo '<td>'.$row['EC_reason'].'</td>';
					echo '<td><a href = "action/rejectec.php?EC_id='.$row['EC_id'].'" class="btn btn-sm btn-success">Change</a></td>';
				}
			}
			
			//Step 5 - Free resource & close connection
			mysqli_free_result($result);
			mysqli_close($link);

			?>      
					</tbody>
				</table>
				</div>
				
				<div id="rejected" class="tabcontent" style="display: none">
				<table class="table">
					<thead>
						<tr style="text-align: center">
							<th>Student</th>
							<th>Course</th>
							<th>Upload Date</th>
							<th>EC Reason</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody style="text-align: center">
						<?php
			             //Step 1 - Establishing connection
						 include('../conn.php');
						//Step 2 - Handling connection error
						//Step 3 - Execute SQL query
						$sql = "SELECT * 
								FROM ec E JOIN student S JOIN course C
								WHERE E.EC_Status = '0'
								AND E.student_id = S.student_id
								AND S.course_id = C.course_id
								AND E.lect_id = '".$_SESSION['lect_id']."'
								GROUP BY EC_id";
						$result = mysqli_query($link, $sql);
						//Step 4 - Process result
						if(mysqli_affected_rows($link)>0){
						for ($i = 0; $i < mysqli_num_rows($result); $i++){
						$row  = mysqli_fetch_assoc($result);
					echo '<tr>';
					echo '<td>'.$row['student_id'].'<br>'.$row['student_name'].'</td>';
					echo '<td>'.$row['course_id'].'<br>'.$row['course_name'].'</td>';
					echo '<td>'.$row['EC_date'].'</td>';					
					echo '<td>'.$row['EC_reason'].'</td>';
					echo '<td><a href = "action/acceptec.php?EC_id='.$row['EC_id'].'" class="btn btn-sm btn-success">Change</a></td>';
				}
			}
			
			//Step 5 - Free resource & close connection
			mysqli_free_result($result);
			mysqli_close($link);

			?>      
					</tbody>
				</table>
				</div>
				
			</div>
		</div>
		<script type="text/javascript" src="action/tab.js"></script>
	</body>
</html>