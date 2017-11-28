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
		<title>Hospital System - Doctor View</title>
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

							<!-- Logo -->
								<a href="DoctorView.html" class="logo">
									<span class="symbol"><img src="images/Hospital Logo.png" alt="" /></span>
									<span class="title">Hospital System</span>
								</a>


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
						<h2>Doctor Menu</h2>
						<ul>
							<li><a href="DoctorView.php">Home</a></li>
							<li><a href="DiseaseList.php">Disease List</a></li>
							<li><a href="PatientList_Doctor.php">Patient List</a></li>
							<li><a href="LogOut.php">Log Out</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1>Personal Information</h1>
							</header>
							<?php
								$doctorid = $id;
								$query = "SELECT * FROM users_details WHERE id=$doctorid";
								$result = $MySQLi_CON->query($query);
								if ($result->num_rows > 0) {
									if($row = $result->fetch_assoc()) {						
										echo'<h2>
												Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
												'.$row['name'].'
												<br>
											</h2>
											<h2>
												Department: &nbsp&nbsp&nbsp	 
												'.$row['department'].'
												<br>
											</h2>
											<h2>
												Contact No: &nbsp&nbsp&nbsp&nbsp
												'.$row['cellphone'].'
											</h2>';
									}
								}
								
								echo'<ul class="actions">
										<center>
											<li>
												<a href="http://localhost/Hospital%20System/UpdatePersonalInformation.php?value='.$row["id"].'" class="button">
													Update Personal Information
												</a>
											</li>
										</center>
									</ul>';
							?>
							
							<br><br>
							<header>
								<h1>Doctor DashBoard</h1>
							</header>
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="images/pic01.jpg" alt="" />
									</span>
									<a href="DiseaseList.php">
										<h2>Disease List</h2>
										<div class="content">
										</div>
									</a>
								</article>

								<article class="style5">
									<span class="image">
										<img src="images/pic03.jpg" alt="" />
									</span>
									<a href="PatientList_Doctor.php">
										<h2>Patient List</h2>
										<div class="content">
										</div>
									</a>
								</article>
								
								<article class="style3">
									<span>
										<img src="images/pic03.jpg" alt="" />
									</span>
									<a>
										<h2>Coming Soon</h2>
									</a>
								</article>
							</section>
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

