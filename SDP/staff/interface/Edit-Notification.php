<?php
session_start();
?>
<!doctype html>
<html lang="en">
    <head>
    </head>

    <?php require "../design/staff-navbar.php"?> 
	<body>
		<div class="row bg-light">
			<?php require "../design/navtab-managenotification.php"?>
            <div class="col-md-9">
			<div class="col-md-9">
				<div class="container bg-light card body">
					<h3 class="row justify-content-center font-weight-bold">Notification Details</h3>
					<br>
                    <?php require "../action/view-notification.php";?>
					<form action="../action/edit-notification.php" method="post">
                        <div class="form-group row">
							<label class="col-3 col-form-label">Notification ID</label> 
							<div class="col-8">
								<input value="<?php echo $id;?>" class="form-control here" type="text" name="id" required=required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Notification Title</label> 
							<div class="col-8">
								<input value="<?php echo $notiTitle;?>" class="form-control here" type="text" name="title" required=required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Staff ID</label> 
							<div class="col-8">
								<input value="<?php echo $staffID;?>" class="form-control here" type="text" name="staffID" required=required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Staff Name</label> 
							<div class="col-8">
								<input value="<?php echo $staffName;?>" class="form-control here" type="text" name="name" disabled>  
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Notification content</label> 
							<div class="col-8">
						    	<textarea  class="form-control here" rows="8" cols="50" name="content" name="content"><?php echo $content;?></textarea>
							</div>
					  	</div>
					    <div class="form-group row">
							<div class="offset-4 col-8">
								<button type="submit" class="btn btn-primary">Update</button>
							</div>
					    </div>
					</form>
				</div>
			</div>
		</div>
    </body>
</html>