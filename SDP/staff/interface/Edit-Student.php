<?php
session_start();
?>
<!doctype html>
<html>
	<head>
		
	</head>

	<?php require "../design/staff-navbar.php"?>
	<body>
		<div class="row bg-light">
			<?php require "../design/navtab-managestudent.php"?>
			<div class="col-md-9">
				<?php 
					require "../action/view-student.php";

					$sql = "SELECT DISTINCT course_id
					FROM course";
	
					$course_row = array();
					$result = mysqli_query($link,$sql);
					while ($row = mysqli_fetch_assoc($result)) {
						$course_row[] = $row;
					}
				?>
				<div class="container bg-light card body">
					<h3 class="row justify-content-center font-weight-bold">Edit Information</h3>
					<br>
					<form action="../action/edit-student.php?id=<?php echo $id;?>" method="post">
						<div class="form-group row">
							<label class="col-3 col-form-label">Name</label> 
							<div class="col-8">
								<input value="<?php echo $name;?>" class="form-control here" type="text" name="name" required=required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Student ID</label> 
							<div class="col-8">
								<input value="<?php echo $id;?>" class="form-control here" type="text" disabled>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Date of Birth</label> 
							<div class="col-8">
								<input value="<?php echo $dob;?>" class="form-control here" type="date" name="dob" required=required>
							</div>
						</div>
						<div class="form-group row">
						<label class="col-3 col-form-label">Phone Number</label> 
							<div class="col-8">
								<input value="<?php echo $num;?>"	 class="form-control here" type="text" name="num" required=required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Gender</label> 
							<div class="col-8">
								<select class="custom-select" name="gender" required=required>
									<option value="M" <?php if ($gender == 'Male') echo ' selected="selected"';?>>Male</option>
									<option value="F" <?php if ($gender == 'Female') echo ' selected="selected"';?>>Female</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Email</label> 
							<div class="col-8">
								<input value="<?php echo $email;?>" class="form-control here" type="text" name="email" required=required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Street</label> 
							<div class="col-8">
								<input value="<?php echo $street;?>" class="form-control here" type="text" name="street" required=required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">State</label> 
							<div class="col-8">
								<input value="<?php echo $state;?>" class="form-control here" type="text" name="state" required=required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">City</label> 
							<div class="col-8">
								<input value="<?php echo $city;?>" class="form-control here" type="text" name="city" required=required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Postcode</label> 
							<div class="col-8">
								<input value="<?php echo $postcode;?>" class="form-control here" type="text" name="postcode" required=required>
							</div>
						</div><div class="form-group row">
							<label class="col-3 col-form-label">Country</label> 
							<div class="col-8">
								<input value="<?php echo $country;?>" class="form-control here" type="text" name="country" required=required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Course</label> 
							<div class="col-8">
								<select id="select" class="custom-select" name="course" required=required>
									<?php
										for ($i = 0;$i < count($course_row); $i++){ ?>
											<option value="<?php echo $course_row[$i]["course_id"]; ?>" <?php if ($course_id == $course_row[$i]["course_id"]) echo ' selected="selected"';?>><?php echo $course_row[$i]["course_id"]; ?></option>
										<?php }
									?>
								</select>
							</div>
						</div>
					    <div class="form-group row">
							<div class="offset-4 col-8">
								<button name="submit" type="submit" class="btn btn-primary">Update Profile</button>
								<a name="submit" type="submit" class="btn btn-primary" href="ManageStudent.php">Back</a>
							</div>
					    </div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>