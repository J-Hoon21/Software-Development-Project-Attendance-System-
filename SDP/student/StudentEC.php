
<!DOCTYPE HTML>
<html>
<style>

main
{
	margin-left:300px;
	font-family: Times New Roman;
	font-size: 35px;
}

nav
{
	font-family: Times New Roman;
	font-size: 25px;
	position: fixed;
	top:0;
	left:0;
	width: 230px;
	height:100%;
	background:black;
	display: flex;
	flex-direction: column;
	align-item: ;
	justify-content: center;
}

nav a 
{
	display: inline-block;
	text-decoration:none;
	padding: 40px 20px;
	font-size:0.8em;
	font-weight: ;
	text-transform: uppercase;
	letter-spacing:0.05em;
	color:white
}

nav a:hover
{
	text-decoration:underline;
	color:green;
}

body 
{
	background-image: url('apu_still01_entrance_0.jpg');
	background-color:#f2f2f2;
	padding: 10px;
}

.btn 
{
  background-color: #66ff66;
  color: Black;
  padding: 15px;
  margin: 10px 0;
  border: none;
  width: 15%;
  border-radius: 20px;
  cursor: pointer;
  font-size: 25px;
}

.btn:hover 
{
  background-color: #ff1a1a;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-50,
.col-75 {
  padding: 0 20px;
}

.container {
  background-color: #e6f3ff;
  padding: 10px 50px 15px 20px;
  border: 1px solid light blue;
  border-radius: 20px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 15px;
  border: 1px solid #ccc;
  border-radius: 15px;
}
</style>


<body>

<nav>
	<a href="LoginPage">Home page</a>
	<a href="StudentAttendanceHistory.php">Attendance History</a>	
	<a href="StudentEC.php">Student EC</a> 
	<a href="logout.php">Log Out</a>
</nav>

<center><h1>Student's EC<h1></center>
<center><p>“Education is the passport to the future, for tomorrow belongs to those who prepare for it today.”<br> — Malcolm X
<p></center>
<br><br>
<main>

<form action = "StudentphpEC.php" method = "POST">
 <div class="container">
 
  <div class="col-75">
   <div class="col-50">
	<label for="student_id">Student ID: </label>
	<input type="text" id="student_id" name="student_id" required><br><br>
	<label for="EC_reason">EC Reason: </label>
	<input type="text" id="EC_reason" name="EC_reason" required><br><br>
	<label for="EC_date">EC Date: </label><br>
	<input type="date" id="EC_date" name="EC_date" required><br><br>
	<label for="lect_id">Lecturer Name: </label><br>
	<select class="custom-select form-control" name="lect_id" required>
	<option value="">--Lecturer Name--</option>
	<?php 			             
	//Step 1 - Establishing connection
	 include('../conn.php');
	//Step 3 - Execute SQL query
	$sql = "SELECT DISTINCT * FROM lecturer";
	$result = mysqli_query($link, $sql);
	//Step 4 - Process result
	if(mysqli_affected_rows($link)>0){
	for ($i = 0; $i < mysqli_num_rows($result); $i++){
	$row  = mysqli_fetch_assoc($result);
	echo '<option value="'.$row['lect_id'].'">'.$row['lect_id'].'&'.$row['lect_name'].'</option>';
	}
	}
	?>
	</select> <br><br>
	<center><input type="submit" value="Submit"class="btn" required></center>
   </div>
  </div>
 </div>
</form>
	
</main>

</body>	

</html>