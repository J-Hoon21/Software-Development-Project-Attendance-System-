<!doctype html>
<html>
	<head>
	</head>

	<?php require "../design/staff-navbar.php"?>
	<body>
		<div class="row bg-light">
			<?php require "../design/navtab-manageclass.php"?>
			<div class="col-md-9 card body">
				<div class="container bg-light">
					<h3 class="row justify-content-center font-weight-bold">Timetable Arrangement</h3>
					<br>
					<?php
					require "../../conn.php";

					$sql = "SELECT DISTINCT module_name, module_id
							FROM module";
	
					$module_row = array();
					$result = mysqli_query($link,$sql);
					while ($row = mysqli_fetch_assoc($result)) {
						$module_row[] = $row;
					}
					?>
					<form action="../action/create-timetable.php" method="post">
						<div class="form-group row">
							<label class="col-3 col-form-label">Module</label> 
							<div class="col-8">
								<select class="custom-select" name="module" required=required>
									<option value="">--Module--</option>
									<?php
										for ($i = 0;$i < count($module_row); $i++){ ?>
											<option value="<?php echo $module_row[$i]["module_id"]; ?>"><?php echo $module_row[$i]["module_name"]; ?></option>
										<?php }
									?>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-3 col-form-label">Group</label> 
							<div class="col-8">
								<select class="custom-select" name="group" required=required>
									<option value="">--Group--</option>
									<option value="L1">L1</option>
									<option value="L2">L2</option>
									<option value="T1">T1</option>
									<option value="T2">T2</option>
									<option value="T3">T3</option>
									<option value="T4">T4</option>
									<option value="T5">T5</option>
								</select>
							</div>
						</div>    
					    <div class="form-group row">
							<label class="col-3 col-form-label">Time</label> 
							<div class="col-8">
								<input class="form-control here" type="time"  name="time" required=required>
							</div>
					    </div>
					    <div class="form-group row">
							<label class="col-3 col-form-label">Date</label> 
							<div class="col-8">
								<input class="form-control here" type="date"  name="date" required=required>
							</div>
					    </div>
					    <div class="form-group row">
							<div class="offset-4 col-8">
								<button name="submit" type="submit" class="btn btn-primary">Confirm</button>
							</div>
					    </div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>