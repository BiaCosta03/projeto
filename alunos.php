<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aluno</title>
</head>
<body>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Alunos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Sistema de Alunos</h1>
    <form id="alunoForm">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br>
        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" required>
        <br>
        <button type="submit">Cadastrar</button>
    </form>
    <table id="alunosTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Email</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
    <script src="scripts.js"></script>
</body>
</html>
</body>
</html>