<?php
	if(isset($_SESSION['userSession']))
	{ 
		// Take the current page URL                          
		// $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";                        
		$check_level= "".$_SESSION['userSession'];
		
		// Fetching all from current user by following the id
		$query = $MySQLi_CON->query("SELECT * FROM user WHERE id='$check_level'");
		$row = $query->fetch_array();
		
		// If level == 2, it is a banned account, controlled by admin
		if ($row['level'] == '1001')
		{     
			header("Location: admin.php");  
		}
		
		else if ($row['level'] == '1002')
		{
			header("Location: DoctocView.html");
		}
		
		else if ($row['level'] == '1003')
		{
			header("Location: NurseView.html");
		}
		
		else
		{
			header("Location: Approval.html");
		}
	}
?>