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
				$("#notiTable").on("click", "#btn-delete", function() {
					var yes = confirm("Do you want to delete " + $(this).val() + " ?");
					if (yes) {
						console.log("YES");
						$.post("../action/delete-notification.php", {
							Notification_id: $(this).val(),
						}, function (data) {
							alert("Successfully Deleted");
							reload_table();
						}, "json")
					}
				});
			});

			function reload_table(){
				$.get("../action/notification-table.php", {}, function(data) {
					var msg = "";
					var count = 0;
					data.forEach (i => {
						count = count + 1;
						msg += "<tr>"
						msg += "<td>" + count + "</td>"
						msg += "<td>" + i.Noctification_title + "</td>"
						msg += "<td>" + i.staff_name + "</td>"
						msg += "<td>"
						msg += "<a class='btn btn-sm btn-success' style='margin: 5px;' href='View-Notification.php?id="+i.Notification_id+"'>View</a>"
						msg += "<a class='btn btn-sm btn-success'id='btn-edit' style='margin: 5px;' href='Edit-Notification.php?id=" + i.Notification_id + "'>Edit</a>"
						msg += "<button class='btn btn-sm btn-success' id='btn-delete' value='" + i.Notification_id  + "'>Delete</button>"
						msg += "</td>"
						msg += "</tr>"
					});
					$("#tableList").html(msg);
				}, "json")
			}
			
		</script>
	</head>
	
	<?php require "../design/staff-navbar.php"?>
	<body>
		<div class="row bg-light">
			<?php require "../design/navtab-managenotification.php"?>
			<div class="col-md-9 card body">
				<div class="row">
					<a class="btn btn-lg btn-light ml-auto mr-5" href="Create-Notification.php" style="border: solid 1px;">+</a>
				</div>
				<br><br>
				<table class="table table-striped" id="notiTable">
					<thead>
						<tr>
							<th>ID</th>
							<th>Title</th>
							<th>Staff ID</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody id="tableList">
       
					</tbody>
				</table>
			</div>
		</div>
		<div class="modal fade" id="delete-modal" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Warning</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					 </div>
					<div class="modal-body">
						Are you sure you want to delete the student?
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
						<button type="button" class="btn btn-primary">Confirm</button>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>