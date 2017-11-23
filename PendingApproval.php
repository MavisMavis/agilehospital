<?php
	session_start();

	include_once 'DatabaseConnect.php';

	$id = "".$_SESSION['userSession'];
	
	
	// Fetching all from current user by following the id
	$query = $MySQLi_CON->query("SELECT * FROM users WHERE id='$id'");
	$row = $query->fetch_array();
	
	if ($row['level'] == '3')
	{     
		header("Location: admin.php");  
	}
	
	else if ($row['level'] == '2')
	{
		header("Location: NurseView.php");
	}
	
	else if ($row['level'] == '1')
	{
		header("Location: DoctorView.php");
	}
	else if ($row['level'] == '')
	{
		header("Location: SignIn.php");
	}
	
	$MySQLi_CON->close(); 
?>
<html>
	<head>
		<title>Hospital System - Pending</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	
	<body>
		<!-- Wrapper -->
			<div id="wrapper">
				<br><br>
				
				<!-- Main -->
					<div class="inner">
						<header>
							<div class="inner">
								<section>
									<h1><center>Please wait while the admin approve your request</center></h1>
									<center><img src="images/nurse.jpg" height="380" width="450"></center>
									
										<ul class="actions">
										<center>
											<li>
												<a href="LogOut.php" class="button">Back to Sign In</a>
												</a>
											</li>
										</center>
									</ul>
								</section>
							</div>
						</header>
					</div>
				
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
