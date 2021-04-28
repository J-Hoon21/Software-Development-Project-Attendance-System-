<?php
require "../../conn.php"; 
$id = $_POST["student_id"];
$sql="DELETE FROM student WHERE student_id = '$id'";
$result = mysqli_query($link, $sql);
if ($result) {
	$response['result'] = "YES";
} else {
	$response['result'] = "NO";
}
echo json_encode($response);
?>