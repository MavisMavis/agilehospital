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
		<title>patient Details</title>
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
						</div>
					</header>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<ul class="actions">
									<li>
										<a href="PatientList_Doctor.php">
											<input type="submit" value="Back to Patient List" class="special" />
										</a>
									</li>
							</ul>
							
							<?php
								$getid = $_GET['value'];
								$query = "SELECT * FROM patient_details WHERE patient_id=$getid";
								$result = $MySQLi_CON->query($query);
								if ($result->num_rows > 0) {
									if($row = $result->fetch_assoc()) {						
										echo'<h1>'.$row['name'].' &nbsp&nbsp '.$row['identity_number'].'</h1>
											<h2>'.$row['syndrome'].'</h2>
											<p>'.$row['Diagnosis'].'</p>';
									}
								}
							?>
							
							<br>
							<center>
								<?php
									$chk_id = $MySQLi_CON->query("SELECT patient_id FROM patient_details WHERE name='".$row["name"]."'");
									$user_id = mysqli_fetch_assoc($chk_id);
									$id = $user_id['patient_id'];
									
									$link = 'http://localhost/Hospital%20System/AddDiagnosis.php?value=' . $id;
									
									echo'
										<form action="" method="post">
											<a href="'.$link.'" class="button special">Add Syndrome</a>
										</form>';
								?>
							</center>
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
