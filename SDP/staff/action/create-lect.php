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
    $pass = $_POST["password"];
    $pass2 = $_POST["password2"];
    $photo = $_POST["photo"];

    //check whether passowrd are same
    if ($pass === $pass2){
        //get the last staff id
        $sql1 = "SELECT lect_id 
                 FROM  lecturer
                 ORDER BY lect_id 
                 DESC LIMIT 1;";
		$results = mysqli_query($link,$sql1); //return whether there is a result

		if(mysqli_num_rows($results)>0){ 

            //increment staff id by one
            $row = mysqli_fetch_assoc($results);
            $num = explode("LT", $row['lect_id']);
            $count = strlen($num[1]);
            $num = intval($num[1]);
            $num++;
            $id = "LT";
			while (strlen($id) != 5) {
				$id .= "0";
				if (strlen($id) + strlen($num) == 5) {
					$id .= $num;
				}
			}

            $sql2 = "INSERT INTO lecturer(
                                           lect_id,
                                           lect_name, 
                                           lect_DOB,
                                           lect_num, 
                                           lect_gender, 
                                           lect_email, 
                                           lect_street, 
                                           lect_postcode,
                                           lect_city,
                                           lect_state,
                                           lect_country,
                                           lect_password,
                                           lect_pic
                                           )
                    VALUES (
                            '$id',
                            '$name',
                            '$date',
                            '$phone',
                            '$gender',
                            '$email',
                            '$street',
                            '$postcode',
                            '$city',
                            '$state',
                            '$country',
                            '$pass',
                            '$photo'
                        );";
            
            //check whether the profile is successfully created
            if ($link->query($sql2) === TRUE) {
                echo "<script>alert('Account Created Successfully');window.location.href='../interface/Create-Lecturer.php';</script>";
            } else {
                echo "<script>alert('Fail to Create Account');window.location.href='../interface/Create-Lecturer.php';</script>";
            }
        }
        else {
            echo "<script>alert('No user is found');window.location.href='../interface/Create-Lecturer.php';</script>";
        }
    }
    else{
        echo "<script>alert('Password are not the same');window.location.href='../interface/Create-Lecturer.php';</script>";
    }
} 
else {
    header("Location: ../interface/Create-Lecturer.php");
    exit();
}
?>