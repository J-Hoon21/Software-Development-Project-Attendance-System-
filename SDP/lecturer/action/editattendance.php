<?php
session_start();
		if(!isset($_SESSION['lect_id'])){
		die(header("location: ../Main Page/login.php"));
	}
    $module_name = $_GET['module'];
    $date = $_GET['date'];
    $start = $_GET['start'];

    $student_id = $_GET['student_id'];
    $status = $_GET['status'];
if ($status === "Present") { // if present change to 0 (absent)
    $status = "0";
  } else {
   $status = "1";			// else absent change to 1 (present)
  }

//step 1: do connection to the database
include "../../conn.php"; //link the conn.php info to here

//step 2:create the SQL statement (since this is update)
	$sql = "UPDATE attendance SET attend_status = '$status'
	WHERE lect_id = '".$_SESSION['lect_id']."'
	AND student_id = '$student_id'
	AND attend_module = '$module_name'
	AND attend_date = '$date'
	AND start_time = '$start'";
//step 3:execute the SQL statement
mysqli_query($link, $sql); //the $conn is the variable in conn.php which store the database information

//step 4: to check the query executed or not!
if(mysqli_affected_rows($link) <=0)
{
	die("<script>alert('Something went wrong. Please try again later.');window.history.go(-1);</script>");
}
else
	echo "<script>alert('Attendance Record Change Successful!');window.history.go(-1);</script>";

//step 6 - Free resource & close connection
  mysqli_close($link);
?>