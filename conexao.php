<?php
$servername = "localhost";
$database = "sistemaacademico";
$username = "root";
$password = "";

$mysqli = new mysqli($servername, $username, $password, $database);
if ($mysqli->connect_errno) {
    echo "Falha na conexão com o MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>