<?php
session_start();

include_once 'DatabaseConnect.php';

$id = "".$_SESSION['userSession'];

$getid = $_GET['value'];
    
$getid = $_GET['value'];
$query = "SELECT * FROM users WHERE id=$getid";
$result = $MySQLi_CON->query($query);
if ($result->num_rows > 0) {
    if($getid == $id) {
        header("Location: admin.php");
    }
    else {
        $query = "DELETE FROM `users` WHERE `users`.`id` ='$getid'";
        $MySQLi_CON->query($query); 
		
		$query = "DELETE FROM users_details WHERE users_details.`id` ='$getid'";
        $MySQLi_CON->query($query);
		
        header("Location: admin.php");
    }

    $MySQLi_CON->close();
}
?>