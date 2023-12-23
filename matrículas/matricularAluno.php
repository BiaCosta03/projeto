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
   
    <title>Matrícula</title>
    <style>
        body{
            background-color: #91DF76;
        }
    </style>
</head>
<body>
    <form action="?page=salvarMatrcAluno" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">

    <h1>Vincule o Aluno</h1>
        <form action="salvarMatricAlunos.php" method="POST">
            <div class="form-group">
                <label for="Aluno_idAluno">Código do aluno</label>
                <input name="Aluno_idAluno" id="Aluno_idAluno" required type="INT" class="form-control" placeholder="Code">
            </div>
            <div class="form-group">
                <label for="Turmas_idTurmas">Código da Turma</label>
                <input name="Turmas_idTurmas" id="Turmas_idTurmas" required type="INT" class="form-control" placeholder="Code">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Matricular</button>
            </div>
        </form>
</body>
</html>