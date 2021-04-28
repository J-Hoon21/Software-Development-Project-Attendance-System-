<!DOCTYPE html>
<html>
<style>

main
{
	margin-left:300px;
}

nav
{
	position: fixed;
	top:0;
	left:0;
	width: 230px;
	height:100%;
	background:black;
	display: flex;
	flex-direction: column;
	align-item: ;
	justify-content: center;
}

nav a 
{
	display: inline-block;
	text-decoration:none;
	padding: 40px 20px;
	font-size:0.8em;
	font-weight: ;
	text-transform: uppercase;
	letter-spacing:0.05em;
	color:white
}

nav a:hover
{
	text-decoration:underline;
	color:green;
}

body 
{
  background-color:#f2f2f2;
  font-family: Times New Roman;
  font-size: 25px;
  padding: 10px;
}

table, th, td 
{
  border: 1px solid black; 
  background-color: #e6e6ff;
}

.btn 
{
  background-color: #66ff66;
  color: Black;
  padding: 15px;
  margin: 10px 0;
  border: none;
  width: 25%;
  border-radius: 20px;
  cursor: pointer;
  font-size: 25px;
}

.center {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 50px;
}
.btn:hover 
{
  background-color: #ff1a1a;
}

th
{
	 width: 500px;
}


function percentage(partialValue, totalValue) {
   return (100 * partialValue) / totalValue;
} 

</style>
<?php
	session_start();
		if(!isset($_SESSION['student_id'])){
		echo ("<script>alert('Oops! Please Log In First!')</script>");
		die("<script>;window.location.href='../Main Page/login.php';</script>");
	}
	?>
<body>

<nav>
	<a href="LoginPage">Home page</a>
	<a href="StudentAttendanceHistory.php">Attendance History</a>
	<a href="StudentEC.php">Student EC</a> 
	<a href="logout.php">Log Out</a>
</nav>

<Main>
<h1>Attendance History</h1>
<p>“Believe in yourself and all that you are. Know that there is something inside you that is greater than any obstacle.”<br>
– Christian D. Larson</p>
<table>
	<tr>
		<th>Module</th>
		<th>Overall Attendance</th>
	</tr>
	
<?php

	
//Step 1 - Establishing connection
						 include('../conn.php');
						//Step 2 - Execute SQL query
						$sql = "SELECT DISTINCT attend_module
								FROM attendance
								WHERE student_id = '".$_SESSION['student_id']."'";
						$result = mysqli_query($link, $sql);
						//Step 3 - Process result
						if(mysqli_affected_rows($link)>0){
						for ($i = 0; $i < mysqli_num_rows($result); $i++){
						$row  = mysqli_fetch_assoc($result);
						
						
						//Step 4 - Calculate Number of Student Present
						$overall = "SELECT COUNT(attend_module)
								    FROM attendance
									WHERE attend_module = '".$row['attend_module']."'
									AND student_id = '".$_SESSION['student_id']."'
									AND attend_status = '1'";
					    $result2 = mysqli_query($link, $overall);
						$row2  = mysqli_fetch_assoc($result2);
						
						//Step 5 - Total number of student in that particular module and time
						$total = "SELECT COUNT(attend_module)
								    FROM attendance
									WHERE attend_module = '".$row['attend_module']."'
								    AND student_id = '".$_SESSION['student_id']."'";
					    
						$result3 = mysqli_query($link, $total);
						$row3  = mysqli_fetch_assoc($result3);
						
						
						echo '<tr>';
						echo '<td>'.$row['attend_module'].'</td>';
						echo '<td>'.$row2['COUNT(attend_module)'].'/'.$row3['COUNT(attend_module)'].'</td>';				
						}
						}
?>

<br>
</body>
	
</Main>

</html>

