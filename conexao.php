<?php
	$servername = "localhost";
	$database = "sistemaacademico";
	$username = "root";
	$password = "";

	$conn = mysqli_connect($servername, $username, $password, $database);
	mysqli_close($conn);
	

	if (!$conn) {
	("Connection failed: " . mysqli_connect_error()); 
}
	echo "Connected successfully";
	
?>