<?php
session_start();
		if(!isset($_SESSION['lect_id'])){
		echo ("<script>alert('Oops! Please Log In First!')</script>");
		die("<script>;window.location.href='../Main Page/login.php';</script>");
	}
$id = $_POST['id'];
$oldpassword = $_POST['oldpassword'];
$newpassword = $_POST['newpassword'];
$confirm_password = $_POST['confirmpassword'];


//step 1: do connection to the database
include "../../conn.php"; //link the conn.php info to here

  // Validate newpassword and confirm_password
        if(($newpassword != $confirm_password)){
            die("<script>alert('Oops! Password Does Not Match, Please Reenter!');window.history.go(-1);</script>");
		}

//step 2:create the SQL statement (since this is update)
$sql = "UPDATE lecturer SET lect_password = '$newpassword' 
		WHERE lect_id = '$id'
		AND lect_id = '".$_SESSION['lect_id']."'
		AND lect_password ='$oldpassword'";

//step 3:execute the SQL statement
mysqli_query($link, $sql); //the $conn is the variable in conn.php which store the database information

//step 4: to check the query executed or not!
if(mysqli_affected_rows($link) <=0)
{
	die("<script>alert('Something went wrong. Please try again later.');window.history.go(-1);</script>");
}
else
	echo "<script>alert('Password Change Successful!');window.history.go(-1);</script>";

//step 6 - Free resource & close connection
  mysqli_close($link);
?>