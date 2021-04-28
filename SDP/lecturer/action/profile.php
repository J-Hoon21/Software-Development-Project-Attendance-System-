<?php
//connect to database
require "../conn.php"; 

//get data
$sql1 = "SELECT lect_name, 
				lect_DOB,
				lect_num, 
				lect_gender, 
				lect_email, 
				lect_street, 
				lect_postcode,
				lect_city,
				lect_state,
				lect_country,
				lect_pic
         FROM lecturer
		 WHERE lect_id = '".$_SESSION['lect_id']."';
		 ";
$results = mysqli_query($link,$sql1); //return whether there is a result

if(mysqli_num_rows($results)>0){
    $row = mysqli_fetch_assoc($results);
	$_SESSION["lect_name"] = $row["lect_name"];
	$_SESSION["lect_DOB"] = $row["lect_DOB"];
	$_SESSION["lect_num"] = $row["lect_num"];
    //determine full name for gender
	if ($row["lect_gender"] == 'M'){
		$_SESSION["lect_gender"] = 'Male';
	}
	elseif ($row["lect_gender"] == 'F'){
		$_SESSION["lect_gender"] = 'Female';
	}
	$_SESSION["lect_email"] = $row["lect_email"];
	$_SESSION["lect_street"] = $row["lect_street"];
	$_SESSION["lect_postcode"] = $row["lect_postcode"];
	$_SESSION["lect_city"] = $row["lect_city"];
	$_SESSION["lect_state"] = $row["lect_state"];
	$_SESSION["lect_country"] = $row["lect_country"];
	$_SESSION["lect_pic"] = $row["lect_pic"];
}
?>