<?php
	session_start();
	include_once 'DatabaseConnect.php';	
	
	if(isset($_SESSION['userSession'])!=""){
    	header("Location: DoctorView.php");
    	exit;
	}
	
    if(isset($_POST['submit'])) 
	{
        $username = $MySQLi_CON->real_escape_string(trim($_POST['name']));
        $email = $MySQLi_CON->real_escape_string(trim($_POST['email']));
        $password = $MySQLi_CON->real_escape_string(trim($_POST['password']));
		$confirmPassword = $MySQLi_CON->real_escape_string(trim($_POST['confirmpassword']));
        
		// Change password into encrypted password using hash
        $new_password = password_hash($password, PASSWORD_DEFAULT);
        $check_username = $MySQLi_CON->query("SELECT username FROM users WHERE username='$username'");
        $check_email = $MySQLi_CON->query("SELECT email FROM users WHERE email='$email'");
        $count=$check_username->num_rows;
        $count1=$check_email->num_rows;

        if($password == $confirmPassword)
		{
			// Check if the username and email is available
			if($count==0 && $count1==0)
			{
				$query = "INSERT INTO users(username,email,password,level) VALUES('$username','$email','$new_password','0')";

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
								sorry username or email already taken !
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
								Password and Confirm Password is not match !
							</font>
						</h2>
					</div>
				</center>";
		}

		
	$query = "SELECT DISTINCT * FROM users WHERE users.username='$username'";

	$result = $MySQLi_CON->query($query);
	if ($result->num_rows > 0) {
		if($row = $result->fetch_assoc()) {
			$id = $row['id'];
			$name = $row['username'];

			$query = "INSERT INTO users_details(id,name,department,cellphone) VALUES('$id','$name','','')";
			$MySQLi_CON->query($query);
		}
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
										<h1><center>Join Hospital System</center></h1>
										<form action="" method="post" onsubmit="return checkForm(this);">
											<div class="field half first">
												<input type="text" name="name" placeholder="Name" required/>
											</div>
											<div class="field half">
												<input type="email" name="email" placeholder="Email" required/>
											</div>
											<div class="field">
												<input type="password" name="password" placeholder="password" required/>
											</div>
											<div class="field">
												<input type="password" name="confirmpassword" placeholder="Confirm Password" required/>
											</div>
											
											<?php 
											if(isset($msg)){         
												echo $msg;   
											}         
											?>
											
											<ul class="actions">
												<center><li><input type="submit" name="submit" value="Create an Account" class="special" /></li></center>
											</ul>
										</form>
									</section>
								</div>

								<center><p>Already a Member? <a href="SignIn.php">Sign In</a></p></center>
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
