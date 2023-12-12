<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatiple" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet'  type='text/css'  href='estilo.css'>
    <title>Cadastrar Turmas</title>
</head>
<body>
    <form action="?page=salvarTurmas" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">

    <h1>Cadastrar Turmas</h1>
        <form action="salvarTurmas.php" method="POST">
        <div class="form-group">
                <label for="idTurmas">idTurmas</label>
                <input name="idTurmas" required type="text" id="Turmas" class="form-control" placeholder="Turmas">
            </div>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input name="nome" required type="Varchar" id="nome" class="form-control" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="idTurnos">Turno</label>
                <input name="idTurno" required type="text" id="turno" class="form-control" placeholder="turno">
            </div>
            <div class="form-group">
                <label for="alunosMatriculados">Alunos Matriculados</label>
                <input name="alunosMatriculados" required type="int" id="alunosMatriculados" class="form-control" placeholder="alunosMatriculados">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Cadastrar</button>
            </div>
        </form>
</body>
</html>
