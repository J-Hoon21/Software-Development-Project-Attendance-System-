<?php
session_unset();

session_destroy();

echo "<script>window.location.href='../Main Page/login.php';</script>";
?>
