<?php
session_start();
?>
<!doctype html>
<html lang="en">
    <head>
    </head>

    <?php require "../design/staff-navbar.php"?>
    <body>    
        <body style="background-color: rgba(0,0,0,0.1);">
		<div class="row bg-light">
			<?php require "../design/navtab-managenotification.php"?>
            <div class="col-md-9">
			<div class="col-md-9">
				<div class="container bg-light card body">
					<h3 class="row justify-content-center font-weight-bold">Notification Details</h3>
					<br><?php require "../action/view-notification.php";?>
					<form action="" method="post">
						<div class="form-group row">
							<label class="col-3 col-form-label">Notification Title</label> 
							<div class="col-8">
								<input placeholder="<?php echo $notiTitle;?>" class="form-control here" type="text" disabled>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Staff Name</label> 
							<div class="col-8">
								<input placeholder="<?php echo $staffName;?>" class="form-control here" type="text" disabled>  
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Notification content</label> 
							<div class="col-8">
						    	<textarea class="form-control here" rows="8" cols="50" name="content" disabled><?php echo $content;?></textarea>
							</div>
					  	</div>
					    <div class="form-group row">
							<div class="offset-4 col-8">
								<a class="btn btn-primary" href="ManageNotification.php">Done</a>
							</div>
					    </div>
					</form>
				</div>
			</div>
		</div>
    </body>
</html>