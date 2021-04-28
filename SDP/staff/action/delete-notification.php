<?php
require "../../conn.php"; 
$id = $_POST["Notification_id"];
$sql="DELETE FROM noctification WHERE Notification_id = '$id'";
$result = mysqli_query($link, $sql);
if ($result) {
	$response['result'] = "YES";
} else {
	$response['result'] = "NO";
}
echo json_encode($response);
?>