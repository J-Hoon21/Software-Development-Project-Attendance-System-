<?php
	session_start();
		if(!isset($_SESSION['lect_id'])){
		echo ("<script>alert('Oops! Please Log In First!')</script>");
		die("<script>;window.history.go(-1);</script>");
		}
	
$date = $_GET["date"];				
$time = $_GET["start"];
$module = $_GET["module"];
//step 1: do connection to the database
include "../../conn.php"; //link the conn.php info to here
//step 2:create the SQL statement (since this is delete)
$sql = "DELETE FROM attendance
		WHERE lect_id = '".$_SESSION['lect_id']."'
		AND attend_module = '$module'
		AND attend_date = '$date'
		AND start_time = '$time'";
		


//Step 4 - Check query results
if(mysqli_query($link, $sql))
	echo '<script>alert("Successfully DELETED");window.history.go(-1);</script>';
else
	echo '<script>alert("Unable to delete!");window.history.go(-1);</script>';

//Step 5 - Close connection
mysqli_close($link);
