<?php
        $sql = "SELECT * FROM turmas";
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
   
    <title>Cadastrar Turmas</title>
    <style>
        body{
            background-color: #91DF76;
        }
    </style>
</head>
<body>
    <form action="?page=salvarTurmas" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">

    <h1>Cadastrar Turmas</h1>
        <form action="salvarTurmas.php" method="POST">
        <input type="hidden" name="idTurnos" value="<?php print $row->idTurnos; ?>">
            <tr>
                <td><label for="nome">Nome</td>
                <td><input name="nome" required type="varchar" id="nome" class="form-control" placeholder="Nome"></td>
    </tr>
            <tr>
                <td><label for="Turnos_idTurnos">Código do turno</td>
                <td><input name="Turnos_idTurnos" required type="varchar" id="Turnos_idTurnos" class="form-control" placeholder="Código"></td>
    </tr>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Cadastrar</button>
            </div>
        </form>
</body>
</html>