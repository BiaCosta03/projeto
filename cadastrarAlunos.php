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
    <form action="?page=salvarAlunos" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">

    <h1>Cadastrar Alunos</h1>
        <form action="salvarAlunos.php" method="POST">
        <div class="form-group">
                <label for="idMatrícula">Matrícula</label>
                <input name="idMatricula" required type="text" id="Matricula" class="form-control" placeholder="Matricula">
            </div>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input name="nome" required type="text" id="nome" class="form-control" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input name="senha" required type="text" id="grupo" class="form-control" placeholder="senha"  maxlength="16">
            </div>
            <div class="form-group">
                <label for="cpf">cpf</label>
                <input name="cpf" required type="varchar" id="cpf" class="form-control" placeholder="cpf"  maxlength="15" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}">
                <small>Formato: 999.999.999-99</small>
            </div>
            <div class="form-group">
                <label for="telefone">telefone</label>
                <input name="telefone" required type="tel" id="telefone" class="form-control" placeholder="telefone" pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}">
                <small>Formato: 11-9999-9999</small>
            </div>
            <div class="form-group">
                <label for="date">Data de Nascimento</label>
                <input name="date" required type="date" id="telefone" class="form-control" placeholder="date" value="1990-01-01">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Cadastrar</button>
            </div>
        </form>
</body>
</html>
