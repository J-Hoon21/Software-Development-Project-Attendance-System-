<?php
require "../../conn.php"; 
$class = array();
$sql="SELECT module_name, module_group, time_time, time_date, lecturer.lect_id, lect_name, time_id 
      FROM timetable 
      INNER JOIN module 
      ON module.module_id = timetable.module_id 
      INNER JOIN lecturer 
      ON lecturer.lect_id = module.lect_id 
      WHERE module.module_group = timetable.time_group;";
$result = mysqli_query($link, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $class[] = $row;
}

echo json_encode($class);
?>