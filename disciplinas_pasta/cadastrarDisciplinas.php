<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatiple" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet'  type='text/css'  href='estilo.css'>
    <title>Cadastro</title>
</head>
<body>
    <form action="?page=salvarDisciplinas" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">

    <h1>Cadastrar disciplinas</h1>
        <form action="salvarDisciplinas.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input name="nome" required type="text" id="nome" class="form-control" placeholder="Nome">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Cadastrar</button>
            </div>
        </form>
</body>
</html>