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
			<?php require "design/lecnavtab-timetable.php"?>
			<div class="col-md-9  card body">
				<div class="row">
					<a class="btn btn-lg btn-light ml-2 tablinks active" onclick="openTab(event, 'monday')">Monday</a>
					<a class="btn btn-lg btn-light ml-2 tablinks" onclick="openTab(event, 'tuesday')">Tuesday</a>
					<a class="btn btn-lg btn-light ml-2 tablinks" onclick="openTab(event, 'wednesday')">Wednesday</a>
				    <a class="btn btn-lg btn-light ml-2 tablinks" onclick="openTab(event, 'thursday')">Thursday</a>
					<a class="btn btn-lg btn-light ml-2 tablinks" onclick="openTab(event, 'friday')">Friday</a>
					<a class="btn btn-lg btn-light ml-auto mr-5" href="MarkAttendance.php" style="border: solid 1px;">Mark Attendance</a>
				</div>
				<br><br>
				<div id="monday" class="tabcontent">
				<table class="table">
					<thead>
						<tr>
							<th>Day</th>
							<th>Date</th>
							<th>Time</th>
							<th>Module</th>
							<th>Intake</th>
						</tr>
					</thead>
					<tbody>
						<?php
			             //Step 1 - Establishing connection
						 include('../conn.php');
						//Step 2 - Execute SQL query
						$date = date('Y-m-d 00:00:00', strtotime('monday this week'));
						$sql = "SELECT *, M.module_name
								FROM timetable T JOIN module M
								WHERE T.module_id = M.module_id 
								AND T.time_group = M.module_group
								AND T.time_date = '$date'
								AND M.lect_id = '".$_SESSION['lect_id']."'
								GROUP BY T.time_id";
						$result = mysqli_query($link, $sql);
						//Step 3 - Process result
						if(mysqli_affected_rows($link)>0){
						for ($i = 0; $i < mysqli_num_rows($result); $i++){
						$row  = mysqli_fetch_assoc($result);
						$timestamp = strtotime($row['time_date']);
						$day = date('D', $timestamp);
						echo '<tr>';
						echo '<td>'.$day.'</td>';
						echo '<td>'.$row['time_date'].'</td>';				
						echo '<td>'.$row['time_time'].'</td>';
						echo '<td>'.$row['module_id'].'<br>'.$row['module_name'].'</td>';
						echo '<td>'.$row['time_group'].'</td>';
						}
						}
						?> 
					</tbody>
				</table>
				</div>
					<div id="tuesday" class="tabcontent"  style="display : none">
				<table class="table">
					<thead>
						<tr>
							<th>Day</th>
							<th>Date</th>
							<th>Time</th>
							<th>Module</th>
							<th>Intake</th>
						</tr>
					</thead>
					<tbody>
						<?php
			             //Step 1 - Establishing connection
						 include('../conn.php');
						//Step 2 - Execute SQL query
						$date = date('Y-m-d 00:00:00', strtotime('tuesday this week'));
						$sql = "SELECT *, M.module_name
								FROM timetable T JOIN module M
								WHERE T.module_id = M.module_id 
								AND T.time_group = M.module_group
								AND T.time_date = '$date'
								AND M.lect_id = '".$_SESSION['lect_id']."'
								GROUP BY T.time_id";
						$result = mysqli_query($link, $sql);
						//Step 3 - Process result
						if(mysqli_affected_rows($link)>0){
						for ($i = 0; $i < mysqli_num_rows($result); $i++){
						$row  = mysqli_fetch_assoc($result);
						$timestamp = strtotime($row['time_date']);
						$day = date('D', $timestamp);
						echo '<tr>';
						echo '<td>'.$day.'</td>';
						echo '<td>'.$row['time_date'].'</td>';				
						echo '<td>'.$row['time_time'].'</td>';
						echo '<td>'.$row['module_id'].'<br>'.$row['module_name'].'</td>';
						echo '<td>'.$row['time_group'].'</td>';
						}
						}
						?> 
					</tbody>
				</table>
				</div>
					<div id="wednesday" class="tabcontent"  style="display : none">
				<table class="table">
					<thead>
						<tr>
							<th>Day</th>
							<th>Date</th>
							<th>Time</th>
							<th>Module</th>
							<th>Intake</th>
						</tr>
					</thead>
					<tbody>
						<?php
			             //Step 1 - Establishing connection
						 include('../conn.php');
						//Step 2 - Execute SQL query
						$date = date('Y-m-d 00:00:00', strtotime('wednesday this week'));
						$sql = "SELECT *, M.module_name
								FROM timetable T JOIN module M
								WHERE T.module_id = M.module_id 
								AND T.time_group = M.module_group
								AND T.time_date = '$date'
								AND M.lect_id = '".$_SESSION['lect_id']."'
								GROUP BY T.time_id";
						$result = mysqli_query($link, $sql);
						//Step 3 - Process result
						if(mysqli_affected_rows($link)>0){
						for ($i = 0; $i < mysqli_num_rows($result); $i++){
						$row  = mysqli_fetch_assoc($result);
						$timestamp = strtotime($row['time_date']);
						$day = date('D', $timestamp);
						echo '<tr>';
						echo '<td>'.$day.'</td>';
						echo '<td>'.$row['time_date'].'</td>';				
						echo '<td>'.$row['time_time'].'</td>';
						echo '<td>'.$row['module_id'].'<br>'.$row['module_name'].'</td>';
						echo '<td>'.$row['time_group'].'</td>';
						}
						}
						?> 
					</tbody>
				</table>
				</div>
					<div id="thursday" class="tabcontent"  style="display : none">
				<table class="table">
					<thead>
						<tr>
							<th>Day</th>
							<th>Date</th>
							<th>Time</th>
							<th>Module</th>
							<th>Intake</th>
						</tr>
					</thead>
					<tbody>
						<?php
			             //Step 1 - Establishing connection
						 include('../conn.php');
						//Step 2 - Execute SQL query
						$date = date('Y-m-d 00:00:00', strtotime('thursday this week'));
						$sql = "SELECT *, M.module_name
								FROM timetable T JOIN module M
								WHERE T.module_id = M.module_id 
								AND T.time_group = M.module_group
								AND T.time_date = '$date'
								AND M.lect_id = '".$_SESSION['lect_id']."'
								GROUP BY T.time_id";
						$result = mysqli_query($link, $sql);
						//Step 3 - Process result
						if(mysqli_affected_rows($link)>0){
						for ($i = 0; $i < mysqli_num_rows($result); $i++){
						$row  = mysqli_fetch_assoc($result);
						$timestamp = strtotime($row['time_date']);
						$day = date('D', $timestamp);
						echo '<tr>';
						echo '<td>'.$day.'</td>';
						echo '<td>'.$row['time_date'].'</td>';				
						echo '<td>'.$row['time_time'].'</td>';
						echo '<td>'.$row['module_id'].'<br>'.$row['module_name'].'</td>';
						echo '<td>'.$row['time_group'].'</td>';
						}
						}
						?> 
					</tbody>
				</table>
				</div>
					<div id="friday" class="tabcontent"  style="display : none">
				<table class="table">
					<thead>
						<tr>
							<th>Day</th>
							<th>Date</th>
							<th>Time</th>
							<th>Module</th>
							<th>Intake</th>
						</tr>
					</thead>
					<tbody>
						<?php
			             //Step 1 - Establishing connection
						 include('../conn.php');
						//Step 2 - Execute SQL query
						$date = date('Y-m-d 00:00:00', strtotime('friday this week'));
						$sql = "SELECT *, M.module_name
								FROM timetable T JOIN module M
								WHERE T.module_id = M.module_id 
								AND T.time_group = M.module_group
								AND T.time_date = '$date'
								AND M.lect_id = '".$_SESSION['lect_id']."'
								GROUP BY T.time_id";
						$result = mysqli_query($link, $sql);
						//Step 3 - Process result
						if(mysqli_affected_rows($link)>0){
						for ($i = 0; $i < mysqli_num_rows($result); $i++){
						$row  = mysqli_fetch_assoc($result);
						$timestamp = strtotime($row['time_date']);
						$day = date('D', $timestamp);
						echo '<tr>';
						echo '<td>'.$day.'</td>';
						echo '<td>'.$row['time_date'].'</td>';				
						echo '<td>'.$row['time_time'].'</td>';
						echo '<td>'.$row['module_id'].'<br>'.$row['module_name'].'</td>';
						echo '<td>'.$row['time_group'].'</td>';
						}
						}
						?> 
					</tbody>
				</table>
				</div>
				
			</div>
		</div>
			<script type="text/javascript" src="action/tab.js"></script>
	</body>
</html>