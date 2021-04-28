<?php
require "../../conn.php"; 
$student = array();
$sql="SELECT *
      FROM student
      INNER JOIN course 
      ON student.course_id = course.course_id
      GROUP BY student_id;";
$result = mysqli_query($link, $sql);
if(mysqli_num_rows($result)> 0){
    while ($row = mysqli_fetch_assoc($result)) {
        $student[] = $row;
    }
}

echo json_encode($student);
?>