<?php
	session_start();

	include_once 'DatabaseConnect.php';	
	
	$id = "".$_SESSION['userSession'];
	$checkid = $_GET['value'];
	
	// Fetching all from current user by following the id
	$query = $MySQLi_CON->query("SELECT * FROM users WHERE id='$id'");
	$row = $query->fetch_array();

	
	if ($row['level'] == '3')
	{
		header("Location: admin.php");
	}
	
	else if ($row['level'] == '1')
	{
		if ($id == $checkid){
			
		}
		else {
			header("Location: DoctorView.php");
		}
	}
	
	else if ($row['level'] == '2')
	{
		if ($id == $checkid){
			
		}
		else {
			header("Location: NurseView.php");
		}
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
		$name = $MySQLi_CON->real_escape_string(trim($_POST['name']));
		$department = $MySQLi_CON->real_escape_string(trim($_POST['department']));
		$contactno = $MySQLi_CON->real_escape_string(trim($_POST['contactno']));
		
		$result = $MySQLi_CON->query("UPDATE users_details SET name = '$name', department = '$department', cellphone = '$contactno' WHERE id='$id'" );	
		$id = $MySQLi_CON->query("SELECT id FROM users_details WHERE id='$id'");
		
		$count=$id->num_rows;
		
		if($count==1)
		{	
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
		else
		{            
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
		<title>Hospital System - Update Personal Information</title>
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
										<h1><center>Personal Information Update</center></h1>
										<form method="post">
											
											<?php
											$getid = $_GET['value'];
											$querys = "SELECT name, department, cellphone FROM users_details WHERE id='$getid'";	
											$results = $MySQLi_CON->query($querys);
											
											if ($results->num_rows > 0) {
												if($row = $results->fetch_assoc()) {	
												
												echo'<div class="field">
														<input type="text" name="name" placeholder="Name" value="'.$row['name'].'" required/>		
													</div>
													<div class="field">
														<input type="text" name="department" placeholder="Department" value="'.$row['department'].'" required/>
													</div>
													<div class="field">
														<input type="text" name="contactno" placeholder="Contact No" value="'.$row['cellphone'].'" required/>
													</div>';
												}
											}
											else{
												echo'<div class="field">
														<input type="text" name="name" placeholder="Name" required/>		
													</div>
													<div class="field">
														<input type="text" name="department" placeholder="Department" required/>
													</div>
													<div class="field">
														<input type="text" name="contactno" placeholder="Contact No" required/>														
													</div>';
											}
											
											?>
											
											<?php 
											if(isset($msg)){         
												echo $msg;   
											}         
											?>
											
											<ul class="actions">
												<center>
													<li>
														<a href="DoctorView.php" class="button">Back to Home</a>
													</li>
													
													<li>
														<input type="submit" name="submit" value="Update" class="special" />
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

<?php
	$MySQLi_CON->close();
 ?>

