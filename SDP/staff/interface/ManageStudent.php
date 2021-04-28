<?php
session_start();
?>
<!doctype html>
<html>
	<head>
		<script src="../jquery-3.5.1.min.js" type="text/javascript"></script>
		<script>
			$(document).ready(function() {
				reload_table();
				//function2
				$("#stdTable").on("click", "#btn-delete", function() {
					var yes = confirm("Do you want to delete " + $(this).val() + " ?");
					if (yes) {
						console.log("YES");
						$.post("delete-student.php", {
							student_id: $(this).val(),
						}, function (data) {
							alert("DELETED");
							reload_table();
						}, "json")
					}
				});
				$("#stdTable").on("click", "#btn-edit", function() {
					
				});
			});
			
			//function1
			function reload_table(){
				$.get("student-table.php", {}, function(data) {
					var msg = "";
					var count = 0;
					data.forEach (i => {
						count = count + 1;
						msg += "<tr>"
						msg += "<td>" + count + "</td>"
						msg += "<td>" + i.student_name + "</td>"
						msg += "<td>" + i.student_id + "</td>"
						msg += "<td>" + i.course_name + "</td>"
						msg += "<td>"		
						msg += "<a class='btn btn-sm btn-success' style='margin: 5px;' href='View-Student.php?id="+i.student_id+"'>View</a>"
						msg += "<a class='btn btn-sm btn-success'id='btn-edit' style='margin: 5px;' href='Edit-Student.php?id=" + i.student_id + "'>Edit</a>"
						msg += "<button class='btn btn-sm btn-success' id='btn-delete' value='" + i.student_id + "'>Delete</button>"
						msg += "</td>"
						msg += "</tr>"
					});
					$("#tableList").html(msg);
				}, "json")
			}
			
		</script>
	</head>
	
	<?php require "../design/staff-navbar.php"?>
	<body">
		<div class="row bg-light">
			<?php require "../design/navtab-managestudent.php"?>
			<div class="col-md-9 card body">
				<div class="row">
					<a class="btn btn-lg btn-light ml-auto mr-5" href="Create-Student.php" style="border: solid 1px;">+</a>
				</div>
				<br><br>
				<table class="table table-striped" id="stdTable">
					<thead>
						<tr>
							<th>No.</th>
							<th>Student Name</th>
							<th>Student ID</th>
							<th>Course</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody id='tableList'>
        
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>