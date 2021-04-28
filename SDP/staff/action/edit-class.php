<?php
$id = $_GET["id"];
$module_id = $_GET["moduleID"];
$module_group = $_GET["moduleGroup"];
$date = $_POST["date"];
$time = $_POST["time"];

require "../../conn.php";
$sql = "UPDATE timetable
        SET  time_date  = '$date', time_time = '$time', time_group = $module_group, module_id = $module_id
        WHERE  time_id = $id;";

if ($link->query($sql) === TRUE) {
  echo "<script>alert('Record Successfully Updated');window.location.href='../interface/ManageClass.php';</script>";
} else {
  echo "<script>alert('Record Failed to Updated');window.location.href='../interface/ManageClass.php';</script>";
}

?>