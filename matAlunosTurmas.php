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

    <h1>Matricular Aluno em Turma</h1>
    <form action="salvarmatAlunos.php" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
            <div class="form-group">
            <tr>
                <td><label for="Aluno_idAluno">Código do Aluno</td>
                <td><input name="Aluno_idAluno" id="Aluno_idAluno" required type="text" class="form-control" placeholder="Código"></td>
    </tr>
            <tr>
                <td><label for="Turmas_idTurmas">Código da turma</td>
                <td><input name="Turmas_idTurmas" id="Turmas_idTurmas" required type="text" class="form-control" placeholder="Código"><td>
            </td>
                <button class="btn btn-success" type="submit">Cadastrar</button>
            </div>
        </form>
</body>
</html>