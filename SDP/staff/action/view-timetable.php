<?php
$id = $_GET['id'];

require "../../conn.php";
$sql = "SELECT *
        FROM timetable
        INNER JOIN module
        ON timetable.module_id = module.module_id
        INNER JOIN lecturer
        ON module.lect_id = lecturer.lect_id
        WHERE time_id = $id;";
$result = mysqli_query($link, $sql);

$row = mysqli_fetch_assoc($result);
$group = $row['time_group'];
$date = $row["time_date"];
$time = $row["time_time"];
$module_id = $row["module_id"];
$lect_name = $row["lect_name"];
$lect_id = $row["lect_id"];
?>