<?php
$id = $_GET['id'];

require "../../conn.php";
$sql = "SELECT Noctification_title, staff_name, Noctification_content, staff.staff_id
        FROM Noctification
        INNER JOIN staff
        ON Noctification.staff_id = staff.staff_id
        WHERE Notification_id = '$id';";

$result = mysqli_query($link, $sql);

$row = mysqli_fetch_assoc($result);
$staffID = $row["staff_id"];
$notiTitle = $row["Noctification_title"];
$staffName = $row["staff_name"];
$content = $row["Noctification_content"];
?>