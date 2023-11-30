<?php
	$servername = "localhost";
	$database = "sistemaacademico";
	$username = "root";
	$password = "";

	$conn = mysqli_connect($servername, $username, $password, $database);
	mysqli_close($conn);
?>