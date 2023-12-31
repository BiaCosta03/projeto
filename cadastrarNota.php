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
    <form action="?page=salvarnotas" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">

            <h1>Cadastrar Notas</h1>
            <form action="salvarnotas.php" method="POST">
            <div class="form-group">
            <tr>
                <td><label for="Mat_Alunos_Turmas_idMat_Alunos_Turmas">Código da matrícula do Aluno:</td>
                <td><input class="form-control" type="text" id="Mat_Alunos_Turmas_idMat_Alunos_Turmas" name="Mat_Alunos_Turmas_idMat_Alunos_Turmas"></td>
            </tr>
            <tr>
                <td><label for="Turma_Disc_Professor_idTurma_Disc_Professor">Código da matrícula do professor:</td>
                <td><input class="form-control" type="text" id="Turma_Disc_Professor_idTurma_Disc_Professor" name="Turma_Disc_Professor_idTurma_Disc_Professor"></td>
            </tr>
        <tr>
                <td><label for="nota1Bim">Nota 1:</td>
                <td><input class="form-control" type="text" id="nota1Bim" name="nota1Bim"></td>
            </tr>

            <tr>
                <td><label for="nota2Bim">Nota 2:</td>
                <td><input class="form-control" type="text" name="nota2Bim"></td>
            </tr>

            <tr>
                <td><label for="nota3Bim">Nota 3:</td>
                <td><input class="form-control" type="text" name="nota3Bim"></td>
            </tr>

            <tr>
                <td><label for="nota4Bim">Nota 4:</td>
                <td><input class="form-control" type="text" name="nota4Bim"></td>
            </tr>

            <tr>
                <td><label for="provaFinal">Prova Final:</td>
                <td><input class="form-control" type="text" name="provaFinal"></td>
    </tr>

    <tr>
                <td><label for="mediaFinal">Média Final:</td>
                <td><input class="form-control" type="text" name="mediaFinal"></td>
    </tr>

    <div class="form-group">
                <button class="btn btn-success" type="submit">Enviar</button>
            </div>
    </form>


</body>
</html>


