<?php 
$id = $_GET["id"];
require "../../conn.php";

$sql = "SELECT * FROM student INNER JOIN course ON student.course_id = course.course_id WHERE student_id = '$id' GROUP BY student_id ";

$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);

$name = $row["student_name"];
$dob = $row["student_DOB"];
$num = $row["student_num"];
if ($row["student_gender"] == 'M'){
    $gender = 'Male';
}
elseif($row["student_gender"] == 'F'){
    $gender = 'Female';
}
$email = $row["student_email"];
$street = $row["student_street"];
$state = $row["student_state"];
$city = $row["student_city"];
$postcode = $row["student_postcode"];
$country = $row["student_country"];
$course_id = $row["course_id"];
$course = $row["course_name"];
$pic = $row["student_photo"];
?>