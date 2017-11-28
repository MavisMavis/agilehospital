<?php
	session_start();

	include_once 'DatabaseConnect.php';	
	
	$id = "".$_SESSION['userSession'];
	
	
	// Fetching all from current user by following the id
	$query = $MySQLi_CON->query("SELECT * FROM users WHERE id='$id'");
	$row = $query->fetch_array();

	
	if ($row['level'] == '1')
	{
		header("Location: DoctorView.php");
	}
	
	else if ($row['level'] == '2')
	{
		header("Location: NurseView.php");
	}
	
	else if ($row['level'] == '0')
	{
		header("Location: PendingApproval.php");
	}
	else if ($row['level'] == '')
	{
		header("Location: SignIn.php");
	}

	
	if(isset($_POST['submit']))
	{
		$id = $MySQLi_CON->real_escape_string(trim($_POST['id']));
		$level = $MySQLi_CON->real_escape_string(trim($_POST['level']));
		
		$result = $MySQLi_CON->query("UPDATE users SET level = '$level' WHERE id='$id'" );	
		$id = $MySQLi_CON->query("SELECT id FROM users WHERE id='$id'");
		$count=$id->num_rows;
		
		if($count==1){	
			$msg = "<center>
						<div class='alert alert-success'>
							<span class='glyphicon glyphicon-info-sign'></span> &nbsp; 
							<h2>
								<font color='green'>
									Successfully Changed !
								</font>
							</h2>
						</div>
					</center>";   
		} 
		else{            
			$msg = "<center>
						<div class='alert alert-danger'>
							<span class='glyphicon glyphicon-info-sign'></span> &nbsp; 
							<h2>
								<font color='red'>
									Error while changed !
								</font>
							</h2>
						</div>
					</center>";   
		}
	}

?>
<html>
	<head>
		<title>Hospital System - Admin</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

						</div>
					</header>

					<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<div class="inner">
									<section>
										<h1><center>Admin Setting</center></h1>
										<form method="post">
											<div class="field">
												<input type="text" name="id" placeholder="ID" required/>
												
											</div>
											<select name="level">
												<option value="0">0</option>
												<option value="1">1</option>
												<option value="2">2</option>												
											</select>
											<!--
											<div class="field">
												<input type="text" name="level" placeholder="Level" required/>
											</div>
											-->
											<?php 
											if(isset($msg)){         
												echo $msg;   
											}         
											?>
											
											<ul class="actions">
												<center>
													<li>
														<a href="LogOut.php" class="button">Log Out </a>
													</li>
													
													<li>
														<input type="submit" name="submit" value="Update" class="special" />
													</li>
													
												</center>
											</ul>
											<center>0 - Appending Approve &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 1 - Doctor &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 2- Nurse</center>
										</form>
										
										
									</section>
								</div>
								
							</header>
						</div>
					</div>
			</div>
					
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>

	<script type="text/javascript">
		function name(){
			// Get the modal
			var modal = document.getElementById('myModal');

			// Get the button that opens the modal
			var btn = document.getElementById("myBtn");

			// Get the <span> element that closes the modal
			var span = document.getElementsByClassName("close")[0];

			// When the user clicks the button, open the modal 
			btn.onclick = function() {
				modal.style.display = "block";
			}

			// When the user clicks on <span> (x), close the modal
			span.onclick = function() {
				modal.style.display = "none";
			}

			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
				if (event.target == modal) {
					modal.style.display = "none";
				}	
			}
		}
	</script>

<?php

$sql = "SELECT id, username, level FROM users";
$result = $MySQLi_CON->query($sql);

if ($result->num_rows > 0) 
	{
		echo	'<div id="wrapper">
					<div id="main">
						<div class="inner">
							<table style="width:100%">
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Level</th>
									<th>View</th>
									<th></th>
								</tr>';
		// output data of each row
		while($row = $result->fetch_assoc()) 
		{
			$link = 'http://localhost/Hospital%20System/delete.php?value=' . $row["id"];

			echo'<tr>
					<td>'.$row["id"] .'</td>
					<td>'.$row["username"].'</td>
					<td>'.$row["level"].'</td>
					<td><a href="http://localhost/Hospital%20System/UsersDetails.php?value='.$row["id"].'" class="button fit small">Profile</a></td>
					<td>
						<a href="'.$link.'" onclick="return confirm(\'sure to delete !\');"><img src="images/x1.png" /></a>
					</td>';

 
			echo '</tr>';
				
					/*
						<div class="modal-content">
							<span class="close">&times;</span>
							
						<a href="'.$link.'"><img src="images/x1.png" /></a>
						
						<a href="javascript:functionname('..')"
						echo '<a href="?del={$row['actor_id']}" onclick="return confirm(\'sure to delete !\');">Delete</a>'. '<br><br>'; 

						*/
						
		}	
		
		echo				'</table>
						</div>
					</div>
				</div>';
		
	} 
	
	else 
	{
		echo "0 results";
	}
	
	$MySQLi_CON->close();
 ?>