<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "scr_system";
	
	$conn = new mysqli($host, $user, $pass, $db);
	if($conn->connect_error){
		echo "Failed:" . $conn->connect_error;
	}
?>a