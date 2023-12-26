<?php
     include_once('conexao.php');


// Adicionar as notas no banco de dados
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nota1Bim = $_POST["nota1Bim"];
    $nota2Bim = $_POST["nota2Bim"];
    $nota3Bim = $_POST["nota3Bim"];
	$nota4Bim = $_POST["nota4Bim"];
    $provafinal = $_POST["provafinal"];
    $insertDados = "INSERT INTO historico_boletins(nota1Bim, nota2Bim, nota3Bim, nota4Bim, provafinal) VALUES ('$nota1Bim', '$nota2Bim', '$nota3Bim', '$nota4Bim', '$provafinal')";
    $mysqli->query($insertDados);

	if($res==true){
		print "<script>alert('Cadastrou com sucesso!');</script>";
		print "<script>location.href='?page=cadastarNota';</script>";
	}else{
		print "<script>alert('Não foi possível!');</script>";
		print "<script>location.href='?page=cadastarNota';</script>";
	}
}

$url = "cadastrarNota.php";

header('Location: '.$url);

$mysqli->close();



