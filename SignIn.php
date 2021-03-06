<?php
	session_start();
	include_once 'DatabaseConnect.php';
	
	if(isset($_SESSION['userSession'])!=""){
    	header("Location: DoctorView.php");
    	exit;
	}

	if(isset($_POST['login']))
	{
		$username = $MySQLi_CON->real_escape_string(trim($_POST['name']));
		$password = $MySQLi_CON->real_escape_string(trim($_POST['password']));

		$query = $MySQLi_CON->query("SELECT * FROM users WHERE username='$username'");
		$row = $query->fetch_array();

		// If password match the database selected based on username
		if(password_verify($password, $row['password'])){
			$_SESSION['userSession'] = $row['id'];
			header("Location: DoctorView.php");
		}
		
		else
		{
			$msg = "<center>
						<div class='alert alert-danger'>
							<span class='glyphicon glyphicon-info-sign'></span> &nbsp;
								<h2>
									<font color='red'>						
										username or password does not exists !
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
		<title>Hospital System - SignIn</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
		<!-- Wrapper -->
			<div id="wrapper">
				<br><br><br><br>
			
				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<div class="inner">
									<section>
										<h1><center>Sign In to Hospital System</center></h1>
										<form method="post">
											<div class="field">
												<input type="text" name="name" placeholder="Name" required/>
												
											</div>
											<div class="field">
												<input type="password" name="password" placeholder="Password" required/>
											</div>
											
											<?php 
											if(isset($msg)){         
												echo $msg;   
											}         
											?>
											
											<ul class="actions">
												<center><li><input type="submit" name="login" value="Welcome" class="special" /></li></center>
											</ul>
										</form>
									</section>
								</div>

								<center><p>New to Site? <a href="SignUp.php">Create an Account</a></p></center>
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
