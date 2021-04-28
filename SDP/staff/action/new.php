<?php

//connect database
//post user input data => username, password

//check if user input empty
//sql query => SELECT username, password WHERE username=<userinput>
//$result = mysqli_query(..., ...);

if ($row = mysqli_fetch_assoc($result)) {	
	$passwordVerify = password_verify(<userinput>, $row['password']);
	if ($passwordVerify == false) {
		print("wrong password");
	} else if ($passwordVerify == true) {
		print("success");
	} else {
		print("wrong password");
	}
} else {
	print("no user");
}


?>