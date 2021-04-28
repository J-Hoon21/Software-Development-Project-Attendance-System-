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
			<?php require "../design/navtab-addstaff.php"?>
			<div class="col-md-9">
				<div class="container bg-light card body">
					<h3 class="row justify-content-center font-weight-bold">Create Information</h3>
					<br>
					<form action="../action/create-staff.php" method="post">
						<div class="form-group row">
							<label class="col-3 col-form-label">Name</label> 
							<div class="col-8">
							  <input placeholder="Name" class="form-control here" name="name" type="text" required=required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Date of Birth</label> 
							<div class="col-8">
								<input placeholder="dd/mm/yyyy" class="form-control here" name="dob" type="date" required=required>
							</div>
						</div>
					    <div class="form-group row">
					    <label class="col-3 col-form-label">Phone Number</label> 
							<div class="col-8">
								<input placeholder="Phone Number" class="form-control here" name="phone" type="text" required="required">
							</div>
					    </div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Gender</label> 
							<div class="col-8">
								<select class="custom-select" name="gender" required=required>
									<option value="">--Gender--</option>
									<option value="M">Male</option>
									<option value="F">Female</option>
								</select>
							</div>
						</div>
					    <div class="form-group row">
							<label class="col-3 col-form-label">Email</label> 
							<div class="col-8">
								<input placeholder="Email" class="form-control here" name="email" type="text" required="required">
							</div>
					    </div>
					    <div class="form-group row">
							<label class="col-3 col-form-label">Street</label> 
							<div class="col-8">
								<input placeholder="Street" class="form-control here" name="street" type="text" required=required>
							</div>
					    </div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Postcode</label> 
							<div class="col-8">
								<input placeholder="PostCode" class="form-control here" name="postcode" type="text" required=required>
							</div>
					    </div>
						<div class="form-group row">
							<label class="col-3 col-form-label">City</label> 
							<div class="col-8">
								<input placeholder="City" class="form-control here" name="city" type="text" required=required>
							</div>
					    </div>
						<div class="form-group row">
							<label class="col-3 col-form-label">State</label> 
							<div class="col-8">
								<input placeholder="State" class="form-control here" name="state" type="text" required=required>
							</div>
					    </div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Country</label> 
							<div class="col-8">
								<input placeholder="Country" class="form-control here" name="country" type="text" required=required>
							</div>
					    </div>
					    <div class="form-group row">
							<label class="col-3 col-form-label">Password</label> 
							<div class="col-8">
								<input placeholder="Password" class="form-control here" name="password" type="password" required=required>
							</div>
					    </div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Confirm Password</label> 
							<div class="col-8">
								<input placeholder="Confirm Password" class="form-control here" name="password2" type="password" required=required>
							</div>
					    </div> 
						<div class="form-group row">
							<label class="col-3 col-form-label">Upload Your Photo</label> 
							<div class="col-8">
								<input class="custom-file-input" name="photo" id="customFile" type="file" required=required>
								<label class="custom-file-label ml-3">Choose file</label>
							</div>
					    </div> 
					    <div class="form-group row">
							<div class="offset-4 col-8">
								<button class="btn btn-primary" name="submit" type="submit">Create Profile</button>
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