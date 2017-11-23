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
?>
<html>
	<head>
		<title>Users Details</title>
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
							<ul class="actions">
									<li>
										<a href="Admin.php">
											<input type="submit" value="Back to Admin Page" class="special" />
										</a>
									</li>
							</ul>
							
							<?php
								$getid = $_GET['value'];
								$query = "SELECT * FROM users_details WHERE id=$getid";
								$result = $MySQLi_CON->query($query);
								if ($result->num_rows > 0) {
									if($row = $result->fetch_assoc()) {						
										echo'<h1>
												Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
												'.$row['name'].'
											</h1>
											<h1>
												Department: &nbsp&nbsp&nbsp	 
												'.$row['department'].'
											</h1>
											<h1>
												Contact No: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
												'.$row['cellphone'].'
											</h1>';
									}
								}
							?>
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
<?php 
$MySQLi_CON->close(); 
?>
