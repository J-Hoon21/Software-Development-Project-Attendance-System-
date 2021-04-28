<?php
$id = $_POST["id"];
$old = $_POST["old"];
$new_pass = $_POST["new"];
$con_pass = $_POST["confirm"];

if ($new_pass != $con_pass){
    echo "<script>alert('Password are not same');window.location.href='../interface/ChangePassword.php';</script>";
}

require "../../conn.php";
$sql_check = "SELECT staff_id,staff_password FROM staff WHERE staff_id = '$id';";
$result = mysqli_query($link, $sql_check);
$row = mysqli_fetch_assoc($result);

if (mysqli_num_rows($result) >0){
    if ($row["staff_password"] == $old ){    
        $sql = "UPDATE staff
                SET  staff_password  = '$new_pass'
                WHERE  staff_id = '$id';";

        if ($link->query($sql) === TRUE) {
            echo "<script>alert('Record Successfully Updated');window.location.href='../interface/ChangePassword.php';</script>";
        } else {
            echo "<script>alert('Record Failed to Updated');window.location.href='../interface/ChangePassword.php';</script>";
        }
    }else{
        echo "<script>alert('Please enter the correct password');window.location.href='../interface/ChangePassword.php';</script>";
    }
}else{
    echo "<script>alert('User ID is not found');window.location.href='../interface/ChangePassword.php';</script>";
}

