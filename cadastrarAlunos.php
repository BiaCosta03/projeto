<?php
 include_once('conexao.php');
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
    <form action="?page=salvarAlunos" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">

    <h1>Cadastrar Alunos</h1>
        <form action="salvarAlunos.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input name="nome" id="nome" required type="text" class="form-control" placeholder="nome">
            </div>
            <div class="form-group">
                <label for="matrícula">Matrícula</label>
                <input name="matrícula" id="matrícula" required type="varchar" class="form-control" placeholder="matrícula">
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input name="senha" id="senha" required type="password" class="form-control" placeholder="senha">
            </div>
            <div class="form-group">
                <label for="cpf">cpf</label>
                <input name="cpf" id="cpf" required type="varchar" class="form-control" placeholder="cpf"  maxlength="15" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}">
                <small>Formato: 999.999.999-99</small>
            </div>
            <div class="form-group">
                <label for="telefone">telefone</label>
                <input name="telefone" id="telefone" required type="tel" class="form-control" placeholder="telefone" pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}">
                <small>Formato: 11-9999-9999</small>
            </div>
            <div class="form-group">
                <label for="data_nascimento">Data de Nascimento</label>
                <input name="data_nascimento" id="data_nascimento" required type="date" class="form-control" placeholder="data_nascimento" value="1990-01-01">
            </div>
            <div class="form-group">
                <button class="btn btn-success" input type="submit" name="submit">Cadastrar</button>
            </div>
        </form>
</body>
</html>