<?php
include "conexão.php";

// Atualiza os produtos
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["idHistorico_boletins"])){
    $nome = $_POST["nome"];
    $quantidade = $_POST["quantidade"];
    $valor = $_POST["valor"];
    $updateDados = "UPDATE produtos SET nome='$nome', quantidade='$quantidade', valor='$valor' WHERE id=$id";
    $connection->query($updateDados);
}

$connection->close();
?>

