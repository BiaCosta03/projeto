<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatiple" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
   
    <title>Cadastro de notas</title>
    <style>
        body{
            background-color: #91DF76;
        }
    </style>
</head>
<body>

    <h1>Cadastrar Notas</h1>
        <form action="salvarnotas.php" method="POST">
            <div class="form-group">
            <tr>
                <td><label for="nota1Bim">Nota 1Bimestre</td>
                <td><input name="nota1Bim" id="nota1Bim" required type="double" class="form-control" placeholder="Nota1"></td>
    </tr>
            <tr>
                <td><label for="nota2Bim">Nota 2Bimestre</td>
                <td><input name="nota2Bim" id="nota2bIM" required type="double" class="form-control" placeholder="Nota2"><td>
            </tr>
            <tr>
                <td for="nota3Bim">Nota 3Bimestre</td>
                <td><input name="nota3Bim" id="nota3Bim" required type="double" class="form-control" placeholder="Nota3"><td>
    </tr>
            <tr>
                <td><label for="nota4Bim">Nota 4Bimestre</td>
                <td><input name="nota4Bim" id="nota4Bim" required type="double" class="form-control" placeholder="Nota4"></td>
            </tr>
            <tr>
                <td><label for="provafinal">Prova Fnal</td>
                <td><input name="provafinal" id="provafinal" required type="double" class="form-control" placeholder="Prova final"></td>
            </tr>
            <div class="form-group">
                <button class="btn btn-success" type="submit">cadastrar</button>
            </div>
        </form>
</body>
</html>
<?php
    include_once 'listarNota.php';
    include_once('conexao.php');
    exibirHistorico_Boletins();
?>

