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
	
    if(isset($_POST['submit'])) 
	{
		$getid = $_GET['value'];
		$diagnosisa = $MySQLi_CON->real_escape_string(trim($_POST['diagnosisa']));
		$diagnosisb = $MySQLi_CON->real_escape_string(trim($_POST['diagnosisb']));
		$diagnosisc = $MySQLi_CON->real_escape_string(trim($_POST['diagnosisc']));
		$diagnosisd = $MySQLi_CON->real_escape_string(trim($_POST['diagnosisd']));
		$diagnosise = $MySQLi_CON->real_escape_string(trim($_POST['diagnosise']));
		

		$query = "UPDATE patient_details SET Diagnosis='$diagnosisa <br>  $diagnosisb <br>  $diagnosisc <br>  $diagnosisd <br>  $diagnosise <br>' WHERE patient_id='$getid'";
			
		if($MySQLi_CON->query($query))
		{
			$msg = "<center>
						<div class='alert alert-success'>
							<span class='glyphicon glyphicon-info-sign'></span> &nbsp; 
							<h2>
							<font color='green'>
									successfully insert !
								</font>
							</h2>	
						</div>
					</center>";
		}
			
		else
		{
			$msg = "<center>
						<div class='alert alert-danger'>
							<span class='glyphicon glyphicon-info-sign'></span> &nbsp; 
							<h2>
								<font color='orange'>
									error while registering !
								</font>
							</h2>
						</div>
					</center>";
		}
	}
?>

<html>
	<head>
		<title>Doctor - Add Diagnosis</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		
		
		 <!-- Form Validation JavaScript -->
		<script src="js/validation.js"></script>
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
										<h1><center>Update Patient</center></h1>
										<form action="" method="post" onsubmit="return checkForm(this);">
											<div class="field">
												<input type="text" name="diagnosisa" placeholder="Add Diagnosis" />
											</div>
											<div class="field">
												<input type="text" name="diagnosisb" placeholder="Add Diagnosis" />
											</div>
											<div class="field">
												<input type="text" name="diagnosisc" placeholder="Add Diagnosis" />
											</div>
											<div class="field">
												<input type="text" name="diagnosisd" placeholder="Add Diagnosis" />
											</div>
											<div class="field">
												<input type="text" name="diagnosise" placeholder="Add Diagnosis" />
											</div>
											
											<?php 
											if(isset($msg)){         
												echo $msg;   
											}         
											?>
											
											<ul class="actions">
												<center>
													<?php
														$getid = $_GET['value'];
														$query = "SELECT * FROM patient_details WHERE patient_id=$getid";
														$result = $MySQLi_CON->query($query);
														$row = $result->fetch_assoc();
													
														$chk_id = $MySQLi_CON->query("SELECT patient_id FROM patient_details WHERE name='".$row["name"]."'");
														$user_id = mysqli_fetch_assoc($chk_id);
														$id = $user_id['patient_id'];
														
														$link = 'http://localhost/Hospital%20System/PatientDetails_Doctor.php?value=' . $id;
														
														echo'<li>
																<a href="'.$link.'" class="button">Back to Patient List</a>
															</li>
															
															<li>
																<input type="submit" name="submit" value="Update Patient" class="special" />
															</li>';
													?>
												</center>
											</ul>
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

<?php
	$MySQLi_CON->close(); 
?>
