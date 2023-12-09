<?php
	$servername = "localhost";
	$database = "sistemaacademico";
	$username = "root";
	$password = "";

	$conn = new Mysqli($servername, $username, $password, $database);
	mysqli_close($conn);
	

	if (!$conn) {
	("Connection failed: " . mysqli_connect_error()); 
}
	
	
?>