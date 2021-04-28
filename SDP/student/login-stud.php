<?php

//step 1: Initialize the session
session_start();
//Get the information from the form & $_POST[''] is refer to your input object name
$name = $_POST['student_ID'];
$password = $_POST['student_password'];

//step 2: do connection to the database
include "../conn.php"; //link the conn.php info to here

//step 3: select and compare user from database whether user exist or not(since this is select)
$sql = "SELECT student_id FROM student WHERE student_id ='$name' AND student_password ='$password'";
$login = mysqli_query($link, $sql);
if (mysqli_num_rows($login) !== 1) {
  	  die("<script>alert('User not exist. Please input correct Email and Password')</script>");
}
else {

	 echo ("<script>alert('Login Successful!')</script>");
	     // Storing username in session variable 
	     $user = mysqli_fetch_assoc($login);
        $_SESSION['student_id'] = $user['student_id'];
	    header("location: StudentHomePage.php");
    }
mysqli_close($conn);     
?>