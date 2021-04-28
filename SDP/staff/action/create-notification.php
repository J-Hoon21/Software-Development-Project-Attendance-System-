<?php
session_start();
// if they clicked on the submit button
if (isset($_POST["submit"])){ 
    //connect to database
    require "../../conn.php"; 

    // store data
    $staffid = $_SESSION["staff_id"];
    $title = $_POST["title"];
    $content = $_POST["content"];

    $sql = "INSERT INTO noctification (
										staff_id,
										Noctification_title ,
										Noctification_content
										)
            VALUES (
                    '$staffid',
                    '$title',
                    '$content'
                );";
    
    //check whether the profile is successfully created
    if ($link->query($sql) === TRUE) {
        echo "<script>alert('Notification Created Successfully');window.location.href='../interface/ManageNotification.php';</script>";
    } else {
        echo "<script>alert('Notification Created Successfully');window.location.href='../interface/ManageNotification.php';</script>";
    }
} 
else {
    header("Location: ../interface/Create-Notification.php");
    exit();
}
?>