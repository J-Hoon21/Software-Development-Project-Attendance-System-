<?php
	session_start();
		if(!isset($_SESSION['student_id'])){
		echo ("<script>alert('Oops! Please Log In First!')</script>");
		die("<script>;window.location.href='../Main Page/login.php';</script>");
	}
	?>
<!DOCTYPE html>
<html>
<style>



body 
{
  background-color:#f2f2f2;
  font-family: Times New Roman;
  font-size: 25px;
  padding: 10px;
}



.btn
{
  background-color: #66ff66;
  color: Black;
  padding: 15px;
  margin: 10px 0;
  border: none;
  width: 25%;
  border-radius: 20px;
  cursor: pointer;
  font-size: 25px;
}

.center {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 50px;
}

.btn:hover 
{
  background-color: #6666ff;
}

.container {
  background-color: #e6f3ff;
  padding: 10px 25px 15px 20px;
  border: 1px solid light blue;
  border-radius: 20px;
 
}

</style>

<body>

<Main>
 <div class="container">
<center><h1>Main Page</h1></center>
<br> 
<center><h1>Welcome to Student page </h1></center>
<center><p>Intake Code: UCDF1905ICT(SE)</p></center>
<br>
<form method="get" action="StudentAttendanceHistory.php">
	<center><button type="submit"class="btn">Attendance History</button></center>
</form>
<br><br>
<form method="get" action="StudentEC.php">
    <center><button type="submit"class="btn">Student EC</button><center>
</form>	
<br><br><br><br>
 </div>

	
</Main>
</body>
</html>

