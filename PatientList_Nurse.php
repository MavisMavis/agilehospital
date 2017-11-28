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
	
	else if ($row['level'] == '1')
	{
		header("Location: DoctorView.php");
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
		<title>Patient List</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		
	</head>
	<body>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Nurse Menu</h2>
						<ul>
							<li><a href="NurseView.php">Home</a></li>
							<li><a href="PatientList_Nurse.php">Patient List</a></li>
							<li><a href="LogOut.php">Log Out</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1>Patient List</h1>
							<form action="" method="post">
								<a href="AddNewPatients.php" class="button special">Add New Patients</a>
							</form>
							<section>
							<?php
								$query = $MySQLi_CON->query("SELECT * FROM patient_details");
								
								while($row=$query->fetch_assoc())
									{
										$chk_doctor = $MySQLi_CON->query("SELECT username FROM users WHERE id='".$row["doctor_id"]."'");
            							$doctor = mysqli_fetch_assoc($chk_doctor);
										$doc_name = $doctor['username'];
										
										echo'
											<table>
												<tr>
													<td>
														<b>Name:</b> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
														'.$row['name'].'
														<br>
														<b>IC:</b> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
														'.$row['identity_number'].'
														<br>
														<b>Age:</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
														'.$row['age'].'
														<br>
														<b>Address:</b> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
														'.$row['address'].'
														<br>
														<b>Contact no:</b> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
														'.$row['cellphone'].'
														<br>
														<b>Status:</b> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
														'.$row['sex'].'
														<br>
														<b>Syndrome:</b> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
														'.$row['syndrome'].'
														<br>
														<b>Doctor in Charge:</b> &nbsp&nbsp&nbsp
														' . $doc_name .' 		
													</td>
												</tr>
											</table>';
									}
							?>

							</section>
						</div>
					</div>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
<?php 
$MySQLi_CON->close(); 
?>
