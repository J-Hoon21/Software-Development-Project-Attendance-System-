<?php
$id = $_POST["id"];
$staffID = $_POST["staffID"];
$title = $_POST["title"];
$content = $_POST["content"];

require "../../conn.php";
$sql = "UPDATE noctification
        SET Notification_id = '$id', staff_id = '$staffID', Noctification_title = '$title', Noctification_content = '$content'
        WHERE Notification_id = '$id'";
 
if ($link->query($sql) === TRUE) {
  echo "<script>alert('Record Successfully Updated');window.location.href='../interface/ManageNotification.php';</script>";
} else {
  echo "<script>alert('Edit Fail')</script>";
}
?>