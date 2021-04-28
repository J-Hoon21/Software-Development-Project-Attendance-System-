<?php
require "../../conn.php"; 
$notification = array();
$sql="SELECT Notification_id, Noctification_title, staff_name
      FROM noctification
      INNER JOIN staff
      ON noctification.staff_id = staff.staff_id;";
$result = mysqli_query($link, $sql);
if(mysqli_num_rows($result)> 0){
    while ($row = mysqli_fetch_assoc($result)) {
        $notification[] = $row;
    }
}

echo json_encode($notification);
?>