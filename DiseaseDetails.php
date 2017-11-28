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
		<title>Disease Details</title>
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
										<a href="DiseaseList.php">
											<input type="submit" value="Back to Disease List" class="special" />
										</a>
									</li>
							</ul>
							
							<?php
								$getid = $_GET['value'];
								$query = "SELECT * FROM disease WHERE disease_id=$getid";
								$result = $MySQLi_CON->query($query);
								if ($result->num_rows > 0) {
									if($row = $result->fetch_assoc()) {						
										echo'<h1>'.$row['name'].'</h1>
											<span class="image main">
												<img src="'.$row['picture'].'" />
											</span>
											<p>'.$row['description'].'</p>';
									}
								}
							?>
							
							<!--
							<h1>Disease Name</h1>
							<span class="image main"><img src="images/pic13.jpg" alt="" /></span>
							<p>Disease Details hahahahahahishdaslhdiasohdos</p>
							-->
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