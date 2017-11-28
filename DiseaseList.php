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
		<title>Disease List</title>
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
							<h1>Disease List</h1>
							<section class="tiles">
								<?php
									$query = $MySQLi_CON->query("SELECT * FROM disease");
									
									while($row=$query->fetch_assoc())
									{
										$chk_id = $MySQLi_CON->query("SELECT disease_id FROM disease WHERE name='".$row["name"]."'");
										$user_id = mysqli_fetch_assoc($chk_id);
										$id = $user_id['disease_id'];
            
										$link = 'http://localhost/Hospital%20System/DiseaseDetails.php?value=' . $id;
										
            
										echo'<article src="'.$row['picture'].'">
												<span class="image">
													<img src="'.$row['picture'].'" width="400" height="400" />
												</span>
												<a href="'.$link.'">
													<h2>'.$row['name'].'</h2>
												</a>
											</article>';
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
			<script src="assets/js/main.js"></script>

	</body>
</html>

<?php 
$MySQLi_CON->close(); 
?>