<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatiple" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet'  type='text/css'  href='estilo.css'>
    <title>Cadastrar Turnos</title>
</head>
<body>
    <form action="?page=salvarTurnos" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">

    <h1>Cadastrar Turnos</h1>
        <form action="salvarTurnos.php" method="POST">
        <div class="form-group">
                <label for="idTurnos">idTurnos</label>
                <input name="idTurnos" required type="text" id="Turnos" class="form-control" placeholder="Turnos">
            </div>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input name="nome" required type="Varchar" id="nome" class="form-control" placeholder="Nome">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Cadastrar</button>
            </div>
        </form>
</body>
</html>