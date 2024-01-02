<?php
 $sql = "SELECT * FROM turma_disc_professor";
 $sql = "SELECT * FROM turmas WHERE idTurmas=".$_REQUEST['idTurmas'];
 $res = $mysqli->query($sql);
 $row = $res->fetch_object();
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
<form action="?page=salvarmatProfessores" method="POST">
	<input type="hidden" name="acao" value="cadastrar">

    <h1>Matricular professor na Turma</h1>
    <form action="salvarmatProfessor.php" method="POST">
    <input type="hidden" name="idTurmas" value="<?php print $row->idTurmas; ?>">
            <div class="form-group">
            <tr>
                <td><label for="Turmas_idTurmas">Nome da Turma</td>
                <td><input value="<?php print $row->nome; ?>" name="Turmas_idTurmas" id="Turmas_idTurmas" required type="text" class="form-control" placeholder="Código"></td>
    </tr>
            <tr>
                <td><label for="Disciplinas_idDisciplinas">Código da Disciplina</td>
                <td><input name="Disciplinas_idDisciplinas" id="Disciplinas_idDisciplinas" required type="text" class="form-control" placeholder="Código"><td>
    </tr>
            <tr>
                <td><label for="Professores_idProfessores">Código do Professor</td>
                <td><input name="Professores_idProfessores" id="Professores_idProfessores" required type="text" class="form-control" placeholder="Código"><td>
    </tr>
                <button class="btn btn-success" type="submit">Cadastrar</button>
            </div>
        </form>
</body>
</html>