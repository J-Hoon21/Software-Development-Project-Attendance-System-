<?php

session_start();
$StudentID = $_POST['student_id'];
$ECReason = $_POST['EC_reason'];
$ECDate = $_POST['EC_date'];
$LectID = $_POST['lect_id'];

require '../conn.php';
$sql = "INSERT INTO ec(student_id, EC_reason, EC_date, lect_id,EC_status) 
VALUES('$StudentID','$ECReason','$ECDate', '$LectID','2');";
	
if(mysqli_query($link, $sql)){
	 echo "<script>alert('Successfully Submitted');window.location.href='StudentEC.php';</script>";

}else{
     echo "<script>alert('Submitted Failed');window.location.href='StudentEC.php';</script>";
}

?>