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
			<?php require "../design/navtab-managenotification.php"?>
			<div class="col-md-9">
				<div class="container bg-light card body">
					<h3 class="row justify-content-center font-weight-bold">Create New Notification</h3>
					<br>
					<form action="../action/create-notification.php" method="post">
						<div class="form-group row">
							<label class="col-3 col-form-label">Notification Title</label> 
							<div class="col-8">
								<input placeholder="Title" class="form-control here" required="required" type="text" name="title">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Notification content</label> 
							<div class="col-8">
						    	<textarea  placeholder="Write your content here" class="form-control here" rows="8" cols="50" name="content" required=required></textarea>
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