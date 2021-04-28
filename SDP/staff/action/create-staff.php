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
        $sql1 = "SELECT staff_id 
                 FROM staff 
                 ORDER BY staff_id 
                 DESC LIMIT 1;";
		$results = mysqli_query($link,$sql1); //return whether there is a result

		if(mysqli_num_rows($results)>0){ 

            //increment staff id by one
            $row = mysqli_fetch_assoc($results);
            $num = explode("ST", $row['staff_id']);
            $count = strlen($num[1]);
            $num = intval($num[1]);
            $num++;
            $id = "ST";
			while (strlen($id) != 8) {
				$id .= "0";
				if (strlen($id) + strlen($num) == 8) {
					$id .= $num;
				}
			}


            $sql2 = "INSERT INTO staff (
                                        staff_id,
                                        staff_name, 
                                        staff_DOB,
                                        staff_num, 
                                        staff_gender, 
                                        staff_email, 
                                        staff_street, 
                                        staff_postcode,
                                        staff_city,
                                        staff_state,
                                        staff_country,
                                        staff_password,
                                        staff_pic
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
                echo "<script>alert('Account is Created Successfully');window.location.href='../interface/Create-Staff.php';</script>";
            } else {
                echo "<script>alert('Failed to create the Account');window.location.href='../interface/Create-Staff.php';</script>";
            }
        }
        else {
            header("Location: ..inteface/Create-Staff.php?status=NoUser");
        }
    }
    else{
        echo "<script>alert('Password is match');window.location.href='../interface/Create-Staff.php';</script>";
    }
} 
else {
    header("Location: ../interface/Create-Staff.php");
    exit();
}
?>