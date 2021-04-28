<?php
session_start();
?>
<!doctype html>
<html lang="en">
    <head>
    </head>

    <?php require "../design/staff-navbar.php"?>
    <body>    
        <body>
		<div class="row bg-light">
			<?php require "../design/navtab-manageclass.php"?>
            <div class="col-md-9">
			<div class="col-md-9">
				<div class="container bg-light card body">
					<h3 class="row justify-content-center font-weight-bold">Class Details</h3>
					<br>
					<?php require "../action/view-timetable.php";?>
					<form action="" method="post">
						<div class="form-group row">
							<label class="col-3 col-form-label">Module</label> 
							<div class="col-8">
								<input placeholder="<?php echo $module_id;?>" class="form-control here" type="text" disabled>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Group</label> 
							<div class="col-8">
								<input placeholder="<?php echo $group;?>" class="form-control here" type="text" disabled>  
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Date</label> 
							<div class="col-8">
								<input placeholder="<?php echo $date;?>" class="form-control here" type="text" disabled>  
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Time</label> 
							<div class="col-8">
								<input placeholder="<?php echo $time;?>" class="form-control here" type="text" disabled>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Lecturer</label> 
							<div class="col-8">
								<input placeholder="<?php echo $lect_name;?>" class="form-control here" type="text" disabled>  
							</div>
						</div>
					    <div class="form-group row">
							<div class="offset-4 col-8">
								<a class="btn btn-primary" href="ManageClass.php">Done</a>
							</div>
					    </div>
					</form>
				</div>
			</div>
		</div>
    </body>
</html>