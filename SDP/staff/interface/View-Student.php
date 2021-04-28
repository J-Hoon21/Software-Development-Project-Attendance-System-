<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Untitled Document</title>
	</head>

	<?php require "../design/staff-navbar.php";?>
	<body>
		<div class="row bg-light">
			<?php require "../design/navtab-managestudent.php"?>
			<div class="col-md-9">
			<?php require "../action/view-student.php"; ?>
				<div class="container vh-130 bg-light card body">
					<picture style="margin: 10px;">
						<?php echo "<img src='data:image;base64,".base64_encode($pic)."' height='300' width='200'  class='img-fluid img-thumbnail rounded mx-auto d-block' alt='' >";?>
					</picture>
					<div class="form-group row">
						<label class="col-3 col-form-label">Name</label> 
						<div class="col-8">
							<input placeholder="<?php echo $name;?>" class="form-control here" type="text" disabled>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-3 col-form-label">Student ID</label> 
						<div class="col-8">
							<input placeholder="<?php echo $id;?>" class="form-control here" type="text" disabled>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-3 col-form-label">Date of Birth</label> 
						<div class="col-8">
							<input placeholder="<?php echo $dob;?>" class="form-control here" type="text" disabled>
						</div>
					</div>
					<div class="form-group row">
					<label class="col-3 col-form-label">Phone Number</label> 
						<div class="col-8">
							<input placeholder="<?php echo $num;?>"	 class="form-control here" type="text" disabled>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-3 col-form-label">Gender</label> 
						<div class="col-8">
							<input placeholder="<?php echo $gender;?>" class="form-control here" type="text" disabled>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-3 col-form-label">Email</label> 
						<div class="col-8">
							<input placeholder="<?php echo $email;?>" class="form-control here" type="text" disabled>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-3 col-form-label">Street</label> 
						<div class="col-8">
							<input placeholder="<?php echo $street;?>" class="form-control here" type="text" disabled>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-3 col-form-label">State</label> 
						<div class="col-8">
							<input placeholder="<?php echo $state;?>" class="form-control here" type="text" disabled>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-3 col-form-label">City</label> 
						<div class="col-8">
							<input placeholder="<?php echo $city;?>" class="form-control here" type="text" disabled>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-3 col-form-label">Postcode</label> 
						<div class="col-8">
							<input placeholder="<?php echo $postcode;?>" class="form-control here" type="text" disabled>
						</div>
					</div><div class="form-group row">
						<label class="col-3 col-form-label">Country</label> 
						<div class="col-8">
							<input placeholder="<?php echo $country;?>" class="form-control here" type="text" disabled>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-3 col-form-label">Course</label> 
						<div class="col-8">
							<input placeholder="<?php echo $course;?>" class="form-control here" type="text" disabled>
						</div>
					</div>
					<div class="form-group row">
						<div class="offset-4 col-8">
							<a name="submit" type="submit" class="btn btn-primary" href="ManageStudent.php">Done</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>