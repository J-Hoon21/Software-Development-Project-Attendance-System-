<!doctype html>
<html>
	<head>
	</head>
	<?php
	session_start();
		if(!isset($_SESSION['lect_id'])){
		echo ("<script>alert('Oops! Please Log In First!')</script>");
		die("<script>;window.location.href='../Main Page/login.php';</script>");
	}
	?>
	<?php require "design/lec-navbar.php"?>
	<body style="background-color: rgba(0,0,0,0.1);">
		<div class="row bg-light">
			<?php require "design/lecnavtab-notification.php"?>
				<div class="col-md-9  card body">
				<br><br>
				<table class="table">
					<thead>
					<tr style="text-align: center">
							<th>What's New?</th>
					</tr>
					</thead>
					<tbody style="text-align: center">
						<?php
						$Title = $_GET["title"];
			             //Step 1 - Establishing connection
						 include('../conn.php');
						//Step 2 - Execute SQL query
						$sql = "SELECT * 
								FROM noctification
								WHERE Noctification_title = '$Title'";
						$result = mysqli_query($link, $sql);
						//Step 3 - Process result
						if(mysqli_affected_rows($link)>0){
						for ($i = 0; $i < mysqli_num_rows($result); $i++){
						$row  = mysqli_fetch_assoc($result);
						echo '<tr>';
					echo '<td>'.$row['Noctification_title'].'<br><br><br>'.$row['Noctification_content'].'</td>';
				}
			}

			//Step 5 - Free resource & close connection
			mysqli_free_result($result);
			mysqli_close($link);

			?>      
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>