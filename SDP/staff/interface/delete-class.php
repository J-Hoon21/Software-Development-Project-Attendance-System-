<?php
require "../../conn.php"; 
$id = $_POST["time_id"];
$sql="DELETE FROM timetable WHERE time_id = '$id'";
$result = mysqli_query($link, $sql);
if ($result) {
	$response['result'] = "YES";
} else {
	$response['result'] = "NO";
}
echo json_encode($response);
?>