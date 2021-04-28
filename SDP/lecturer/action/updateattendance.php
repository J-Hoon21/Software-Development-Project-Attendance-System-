<?php
	session_start();
		if(!isset($_SESSION['lect_id'])){
		echo ("<script>alert('Oops! Please Log In First!')</script>");
		die("<script>;window.location.href='../../Main Page/login.php';</script>");
	}
$module_name = $_POST['module_name'];
$module_group = $_POST['module_group'];
$date = $_POST['date'];
$start = $_POST['start_time'];
$duration = $_POST['duration'];
$classtype = $_POST['class_type'];

$student_id = $_POST['student_id'];
$status = $_POST["attendance_status"];


//step 1: do connection to the database
include "../../conn.php"; //link the conn.php info to here

//step 2:create the SQL statement (since this is insert)
	
    $sql = "INSERT INTO attendance (lect_id, student_id, attend_status, attend_module, attend_group, attend_date, start_time, attend_duration, classtype) VALUES";
    foreach ($student_id as $key => $value) {
    $sql .= "('".$_SESSION['lect_id']."', '$value', '$status[$key]', '$module_name', '$module_group', '$date', '$start', '$duration', '$classtype'),";
    }
    $sql = rtrim($sql, ',');  	
//step 3:execute the SQL statement
mysqli_query($link, $sql); //the $conn is the variable in conn.php which store the database information

//step 4: to check the query executed or not!
if(mysqli_affected_rows($link) <=0)
{
	die("<script>alert('Something went wrong. Please try again later.');window.history.go(-1);</script>");
}
else
	echo "<script>alert('Attendance Update');window.location.href='../Timetable.php';</script>";

//step 6 - Free resource & close connection
  mysqli_close($link);
?>