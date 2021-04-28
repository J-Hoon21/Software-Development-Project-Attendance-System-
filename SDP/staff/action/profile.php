<?php
//connect to database
require "../../conn.php"; 

//get data
$sql1 = "SELECT staff_name, 
				staff_DOB,
				staff_num, 
				staff_gender, 
				staff_email, 
				staff_street, 
				staff_postcode,
				staff_city,
				staff_state,
				staff_country,
				staff_pic
         FROM staff 
		 WHERE staff_id = '".$_SESSION['staff_id']."';
		 ";
$results = mysqli_query($link,$sql1); //return whether there is a result

if(mysqli_num_rows($results)>0){
    $row = mysqli_fetch_assoc($results);//storing data
	$_SESSION["staff_name"] = $row["staff_name"];
	$_SESSION["staff_DOB"] = $row["staff_DOB"];
	$_SESSION["staff_num"] = $row["staff_num"];
	//determine full name for gender
	if ($row["staff_gender"] == 'M'){
		$_SESSION["staff_gender"] = 'Male';
	}
	elseif ($row["staff_gender"] == 'F'){
		$_SESSION["staff_gender"] = 'Female';
	}
	$_SESSION["staff_email"] = $row["staff_email"];
	$_SESSION["staff_street"] = $row["staff_street"];
	$_SESSION["staff_postcode"] = $row["staff_postcode"];
	$_SESSION["staff_city"] = $row["staff_city"];
	$_SESSION["staff_state"] = $row["staff_state"];
	$_SESSION["staff_country"] = $row["staff_country"];
	$_SESSION["staff_pic"] = $row["staff_pic"];
}
?>