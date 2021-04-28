<?php
// if they clicked on the submit button
if (isset($_POST["submit"])){ 
    //connect to database
    require "../../conn.php"; 

    // store data
    $name = $_POST["name"];
    $date = $_POST["dob"];
    $phone = $_POST["phone"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $street = $_POST["street"];
    $postcode = $_POST["postcode"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $country = $_POST["country"];
    $course = $_POST["course"];
    $pass = $_POST["password"];
    $pass2 = $_POST["password2"];
    $photo = $_POST["photo"];

    //check whether passowrd are same
    if ($pass === $pass2){
        //get the last staff id
        $sql1 = "SELECT student_id 
                 FROM student 
                 ORDER BY student_id 
                 DESC LIMIT 1;";
		$results = mysqli_query($link,$sql1); //return whether there is a result

		if(mysqli_num_rows($results)>0){ 

            //increment staff id by one
            $row = mysqli_fetch_assoc($results);
            $num = explode("S", $row['student_id']);
            $count = strlen($num[1]);
            $num = intval($num[1]);
            $num++;
            $id = "S";
			while (strlen($id) != 5) {
				$id .= "0";
				if (strlen($id) + strlen($num) == 5) {
					$id .= $num;
				}
			}

            $sql2 = "INSERT INTO student (
                                        student_id,
                                        student_name, 
                                        student_DOB,
                                        student_num, 
                                        student_email,
                                        student_street,
                                        student_city, 
                                        student_postcode,
                                        student_country,
                                        course_id,
                                        student_photo,
                                        student_password,
                                        student_gender, 
                                        student_state
                                        )
                    VALUES (
                            '$id',
                            '$name',
                            '$date',
                            '$phone',     
                            '$email',
                            '$street',
                            '$city',
                            '$postcode',
                            '$country',
                            '$course',
                            '$photo',
                            '$pass',
                            '$gender',
                            '$state'
                        );";
            //check whether the profile is successfully created
            if ($link->query($sql2) === TRUE) {
                echo "<script>alert('Account is Created Successfully');window.location.href='../interface/ManageStudent.php';</script>";
            } else {
                echo "<script>alert('Fail to Create Account');window.location.href='../interface/ManageStudent.php';</script>";
            }
        }
        else {
            header("Location: ..inteface/ManageStudent.php?status=NoUser");
        }
    }
    else{
        echo "<script>alert('Password is Unmatch');window.location.href='../interface/ManageStudent.php';</script>";
    }
} 
else {
    header("Location: ../interface/ManageStudent.php");
    exit();
}
?>