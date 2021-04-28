<?php 
session_start();
?>
<!doctype html>
<html>
	<head>
		<title>Untitled Document</title>
	</head>

	<?php 
		require "../../conn.php";
		require "../design/staff-navbar.php";
	?>
	<body>
		<div class="row bg-light">
			<?php
			require "../../conn.php";
			$sql = "SELECT DISTINCT course_id
					FROM course";
	
			$course_row = array();
			$result = mysqli_query($link,$sql);
			while ($row = mysqli_fetch_assoc($result)) {
				$course_row[] = $row;
			}
			?>
			<?php require "../design/navtab-managestudent.php"?>
			<div class="col-md-9">
				<div class="container bg-light card body">
					<h3 class="row justify-content-center font-weight-bold">Create Information</h3>
					<br>
					<form action="../action/create-student.php" method="post">
						<div class="form-group row">
							<label class="col-3 col-form-label">Name</label> 
							<div class="col-8">
							  <input placeholder="Name" class="form-control here" required="required" type="text" name="name">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Date of Birth</label> 
							<div class="col-8">
								<input placeholder="dd/mm/yyyy" class="form-control here" type="date" name="dob" required=required> 
							</div>
						</div>
					    <div class="form-group row">
					    <label class="col-3 col-form-label">Phone Number</label> 
							<div class="col-8">
								<input placeholder="Phone Number" class="form-control here" required="required" type="text" name="phone">
							</div>
					    </div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Gender</label> 
							<div class="col-8">
								<select class="custom-select" name="gender">
									<option value="#">--Gender--</option>
									<option value="M">Male</option>
									<option value="F">Female</option>
								</select>
							</div>
						</div>
					    <div class="form-group row">
							<label class="col-3 col-form-label">Email</label> 
							<div class="col-8">
								<input placeholder="Email" class="form-control here" required="required" type="text" name="email">
							</div>
					    </div>
					    <div class="form-group row">
							<label class="col-3 col-form-label">Street</label> 
							<div class="col-8">
								<input placeholder="Street" class="form-control here" type="text" name="street" required=required>
							</div>
					    </div>
						<div class="form-group row">
							<label class="col-3 col-form-label">State</label> 
							<div class="col-8">
								<input placeholder="State" class="form-control here" type="text" name="state" required=required>
							</div>
					    </div>
						<div class="form-group row">
							<label class="col-3 col-form-label">City</label> 
							<div class="col-8">
								<input placeholder="City" class="form-control here" type="text" name="city" required=required>
							</div>
					    </div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Postcode</label> 
							<div class="col-8">
								<input placeholder="Postcode" class="form-control here" type="text" name="postcode" required=required>
							</div>
					    </div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Country</label> 
							<div class="col-8">
								<input placeholder="Country" class="form-control here" type="text" name="country" required=required>
							</div>
						</div>
					    <div class="form-group row">
							<label class="col-3 col-form-label">Course</label> 
							<div class="col-8">
								<select id="select" class="custom-select" name="course" required=required>
									<option value="">--Course--</option>
									<?php
										for ($i = 0;$i < count($course_row); $i++){ ?>
											<option value="<?php echo $course_row[$i]["course_id"]; ?>"><?php echo $course_row[$i]["course_id"]; ?></option>
										<?php }
									?>
								</select>
							</div>
					    </div>
					    <div class="form-group row">
							<label class="col-3 col-form-label">Password</label> 
							<div class="col-8">
								<input placeholder="Password" class="form-control here" type="text" name="password" required=required>
							</div>
					    </div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Confirm Password</label> 
							<div class="col-8">
								<input placeholder="Confirm Password" class="form-control here" type="text" name="password2" required=required>
							</div>
					    </div> 
						<div class="form-group row">
							<label class="col-3 col-form-label">Upload Photo</label> 
							<div class="col-8">
								<input type="file" class="custom-file-input" id="customFile" name="photo" required=required>
								<label class="custom-file-label ml-3">Choose file</label>
							</div>
					    </div> 
					    <div class="form-group row">
							<div class="offset-4 col-8">
								<button name="submit" type="submit" class="btn btn-primary">Create Profile</button>
							</div>
					    </div>
					</form>
				</div>
			</div>
		</div>
		<script>
			// Add the following code if you want the name of the file appear on select
			$(".custom-file-input").on("change", function() {
			  var fileName = $(this).val().split("\\").pop();
			  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
			});
		</script>
	</body>
</html>