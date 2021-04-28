<?php
$id = $_GET["id"];
$name = $_POST["name"];
$dob = $_POST["dob"];
$num = $_POST["num"];
$gender = $_POST["gender"];
// print_r($gender);
$email = $_POST["email"];
$street = $_POST["street"];
$state = $_POST["state"];
$city = $_POST["city"];
$postcode = $_POST["postcode"];
$country = $_POST["country"];
$course = $_POST["course"];

require "../../conn.php";
$sql = "UPDATE student
        SET student_name = '$name', 
            student_DOB = '$dob', 
            student_num = '$num',
            student_num = '$gender',
            student_email = '$email',
            student_street = '$street',
            student_state = '$state',
            student_postcode = '$postcode',
            student_city = '$city',
            student_country = '$country',
            course_id = '$course'
            WHERE student_id = '$id';";
// print_r($sql);
if ($link->query($sql) === TRUE) {
    echo "<script>alert('Record Successfully Updated');window.location.href='../interface/ManageStudent.php';</script>";
} else {
    echo "<script>alert('Record Failed to Updated');window.location.href='../interface/ManageStudent.php';</script>";
}

?>