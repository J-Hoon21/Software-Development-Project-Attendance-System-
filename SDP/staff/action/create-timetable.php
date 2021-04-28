<?php
session_start();
// if they clicked on the submit button
if (isset($_POST["submit"])){ 
    //connect to database
    require "../../conn.php"; 

    // store data
    $module = $_POST["module"];
    $group = $_POST["group"];
    $time = $_POST["time"];
    $date = $_POST["date"];

    $sql = "INSERT INTO timetable (
                                    time_date,
                                    time_time ,
                                    time_group,
                                    module_id
                                    )
            VALUES (
                    '$date',
                    '$time',
                    '$group',
                    '$module'
                );";
    
    //check whether the profile is successfully created
    if ($link->query($sql) === TRUE) {
        echo "<script>alert('The class is recorded');window.location.href='../interface/ManageClass.php';</script>";
    } else {
        echo "<script>alert('Something went wrong');window.location.href='../interface/ManageClass.php';</script>";
    }
} 
else {
    header("Location: ../interface/MainPage.php");
    exit();
}
?>