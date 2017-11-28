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
	
    if(isset($_POST['submit'])) 
	{
		$status = $MySQLi_CON->real_escape_string(trim($_POST['sex']));
		$username = $MySQLi_CON->real_escape_string(trim($_POST['name']));
		$age = $MySQLi_CON->real_escape_string(trim($_POST['age']));
		$ic = $MySQLi_CON->real_escape_string(trim($_POST['ic']));
		$contact = $MySQLi_CON->real_escape_string(trim($_POST['contact']));
		$address = $MySQLi_CON->real_escape_string(trim($_POST['address']));
		$syndrome = $MySQLi_CON->real_escape_string(trim($_POST['syndrome']));
		$doctor = $MySQLi_CON->real_escape_string(trim($_POST['doctor']));
		
		$check_doctorlevel = $MySQLi_CON->query("SELECT level FROM users WHERE users.level='1' && users.id = '$doctor'");
		$count=$check_doctorlevel->num_rows;
		
		if($count != 0)
		{
			$query = "INSERT INTO patient_details(name, age, identity_number,address, cellphone, sex, syndrome, doctor_id) VALUES ('$username', '$age', '$ic', '$address', '$contact', '$status', '$syndrome', '$doctor')";
			
			if($MySQLi_CON->query($query))
			{
				$msg = "<center>
							<div class='alert alert-success'>
								<span class='glyphicon glyphicon-info-sign'></span> &nbsp; 
								<h2>
									<font color='green'>
										successfully registered !
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
		
		else
		{
			$msg = "<center>
					<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; 
						<h2>
							<font color='red'>
								Doctor ID Not Available !
							</font>
						</h2>
					</div>
				</center>";
		}
	}
	
	$MySQLi_CON->close(); 
?>

<html>
	<head>
		<title>Hospital System - SignUp</title>
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
										<h1><center>Add New Patient</center></h1>
										<form action="" method="post" onsubmit="return checkForm(this);">
											<div class="field">
												Gender: &nbsp&nbsp&nbsp&nbsp&nbsp
												<input type="radio" id="demo-priority-low" name="sex" value="Male" checked>
												<label for="demo-priority-low">Male</label>
												<input type="radio" id="demo-priority-normal" name="sex" value="Female">
												<label for="demo-priority-normal">Female</label>
											</div>
											<div class="field half first">
												<input type="text" name="name" placeholder="Name" />
											</div>
											<div class="field half">
												<input type="text" name="age" maxlength="2" placeholder="Age" />
											</div>
											<div class="field half first">
												<input type="text" name="ic" maxlength="12" placeholder="IC No.  (E.g. 92486587069)" />
											</div>
											<div class="field half">
												<input type="text" name="contact" maxlength="13" value="+6" placeholder="Contact No." />
											</div>
											<div class="field">
												<input type="text" name="address" placeholder="Address" />
											</div>
											<div class="field">
												<input type="text" name="syndrome" placeholder="Syndrome" />
											</div>
											<div class="field">
												<input type="text" name="doctor" maxlength="4" placeholder="Doctor in Charge" />
											</div>
											
											<?php 
											if(isset($msg)){         
												echo $msg;   
											}         
											?>
											
											<ul class="actions">
												<center>
													<li>
														<a href="PatientList_Nurse.php" class="button">Back to Patient List</a>
													</li>
													<li>
														<input type="submit" name="submit" value="Add Patient" class="special" />
													</li>
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
