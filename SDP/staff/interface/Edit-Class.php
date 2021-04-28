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
			<?php require "../design/navtab-manageclass.php"?>
            <div class="col-md-9">
			<div class="col-md-9">
				<div class="container bg-light card body">
					<h3 class="row justify-content-center font-weight-bold">Edit Class Details</h3>
					<br>
                    <?php require "../action/view-timetable.php";?>
					<form action="../action/edit-class.php?id=<?php echo $id;?>&moduleID='<?php echo $module_id;?>'&moduleGroup='<?php echo $group;?>'" method="post">
                        <div class="form-group row">
							<label class="col-3 col-form-label">Module</label> 
							<div class="col-8">
								<input value="<?php echo $module_id;?>" class="form-control here" type="text" name="module" disabled>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Date</label> 
							<div class="col-8">
								<input value="<?php echo $date;?>" class="form-control here" type="date" name="date" required=required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Time</label> 
							<div class="col-8">
								<input value="<?php echo $time;?>" class="form-control here" type="time" name="time" required=required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Lecturer</label> 
							<div class="col-8">
								<input value="<?php echo $lect_name;?>" class="form-control here" type="text" name="lectName" disabled>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Lecturer ID</label> 
							<div class="col-8">
								<input value="<?php echo $lect_id;?>" class="form-control here" type="text" name="lectID" disabled>
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