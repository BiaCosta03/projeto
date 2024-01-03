<?php
$servername = "localhost";
$database = "sistemaacademico2";
//$username = "root";
//$password = "";

$username = "useracad";
$password = "123";

$mysqli = new mysqli($servername, $username, $password, $database);
if ($mysqli->connect_errno) {
    echo "Falha na conexão com o MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}



//COMO BRUNO ENSINOU NAS AULAS

/* <?php
        function conectar(){
            $servername = "localhost";
            $database = "sistemaacademico";
            $username = "root";
            $password = "";

            $conn = new mysqli($servername, $username, $password, $database);

        if($conn->connect_error){
            die("a conexão falhou!" .$conn->connect_error);
        }

            return $conn;
        }

        function desconectar($conn){
            $conn->close();
        }
    ?>*/
?>

