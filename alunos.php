<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Alunos</title>
    <style>
    body {
        font-family: Arial, sans-serif;
    }

    h1 {
        color: #4B0082;
    }

    form {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input {
        margin-bottom: 10px;
    }

button {
    background-color: #4B0082;
    color: white;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
}

button:hover {
    background-color: #6A5ACD;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    border: 1px solid #4B0082;
    padding: 5px 10px;
    text-align: left;
}

th {
    background-color: #4B0082;
    color: white;
}
    </style>
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
        <label for="cpf">CPF:</label>
        <input type="cpf" id="cpf" name="cpf" require>
        <br>
        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" required>
        <br>
        <a href="principalAluno.php"><button type="submit">Cadastrar</button></a>
    </form>
</body>
</html>
