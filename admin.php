<?php
	session_start();

	include_once 'DatabaseConnect.php';
	
	if(isset($_POST['submit']))
	{
		$id = $MySQLi_CON->real_escape_string(trim($_POST['id']));
		$level = $MySQLi_CON->real_escape_string(trim($_POST['level']));
		
		$result = $MySQLi_CON->query("UPDATE users SET level = '$level' WHERE id='$id'" );	
		$id = $MySQLi_CON->query("SELECT id FROM users WHERE id='$id'");
		$count=$id->num_rows;
		
		if($count==1){	
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
		else{            
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
		<title>Hospital System - Admin</title>
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
										<h1><center>Admin Setting</center></h1>
										<form method="post">
											<div class="field">
												<input type="text" name="id" placeholder="ID" required/>
												
											</div>
											<div class="field">
												<input type="text" name="level" placeholder="Level" required/>
											</div>
											
											<?php 
											if(isset($msg)){         
												echo $msg;   
											}         
											?>
											
											<ul class="actions">
												<center>
													<li>
														<a href="LogOut.php" class="button">Log Out </a>
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
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>

<?php

$sql = "SELECT id, username, level FROM users";
$result = $MySQLi_CON->query($sql);

if ($result->num_rows > 0) 
	{
		echo	'<div id="wrapper">
					<div id="main">
						<div class="inner">
							<table style="width:100%">
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Level</th>
								</tr>';
		// output data of each row
		while($row = $result->fetch_assoc()) 
		{
			echo'<tr>
					<td>'. $row["id"] .'</td>
					<td>'.$row["username"].'</td>
					<td>'.$row["level"].'</td>
				</tr>';
		}
		
		echo				'</table>
						</div>
					</div>
				</div>';
		
	} 
	
	else 
	{
		echo "0 results";
	}
	
	$MySQLi_CON->close();
 ?>

