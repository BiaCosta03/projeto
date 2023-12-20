<?php

    if(isset($_POST['submit']))
    {

        include_once('conexao.php');

        $nome = $_POST['nome'];
        $matrícula = $_POST['matrícula'];
        $senha = $_POST['senha'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone'];

        $res = mysqli_query($mysqli, "INSERT INTO professores (nome,matrícula,senha,cpf) 
        VALUES ('$nome','$matrícula','$senha','$cpf','$telefone')");

        header('Location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatiple" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
   
    <title>Cadastro</title>
    <style>
        body{
            background-color: #91DF76;
        }
    </style>
</head>
<body>
    <form action="?page=salvarProfessores" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">

    <h1>Cadastrar Professores</h1>
        <form action="salvarProfessores.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input name="nome" id="nome" required type="text" id="nome" class="form-control" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="matrícula">Matrícula</label>
                <input name="matrícula" id="matrícula" required type="varchar" class="form-control" placeholder="matrícula">
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input name="senha" id="senha" required type="password" id="grupo" class="form-control" placeholder="senha">
            </div>
            <div class="form-group">
                <label for="cpf">cpf</label>
                <input name="cpf" id="cpf" required type="varchar" id="cpf" class="form-control" placeholder="cpf"  maxlength="15" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}">
                <small>Formato: 999.999.999-99</small>
            </div>
            <div class="form-group">
                <label for="telefone">telefone</label>
                <input name="telefone" id="telefone" required type="tel" id="telefone" class="form-control" placeholder="telefone" pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}">
                <small>Formato: 11-9999-9999</small>
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Cadastrar</button>
            </div>
        </form>
</body>
</html>
