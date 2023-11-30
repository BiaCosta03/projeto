<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Professores</title>
    <style>
        body {
        background-image: url(img/icon.png);
    }

    h1 {
        color: black;
        text-align: center;
    }

    form {
        background-color: rgba(12, 46, 12, 0.4);
        height: 550px;
        width: 390px;
        position: absolute;
        transform: translate(-50%,-50%);
        top: 50%;
        left: 50%;
        border-radius: 40px;
        backdrop-filter: blur(10px);    
        padding: 25px 15px;
        text-align: center;
    }

    label {
        display: block;
        margin-bottom: 5px;
        text-align: left;
        font-family: 'Times New Roman', Times, serif;
        font-size: 17px;
        font-weight: bold;
    }

    input {
        margin-bottom: 5px;
        display: block;
        height: 37px;
        width: 90%;
        border-radius: 30px;
        padding: 0 20px;
       
        
    }

    button {
    width: 45%;
    background-color: green;
    color: white;
    padding: 7px 0;
    font-size: 17px;
    font-weight: 60;
    border-radius: 20px;
    cursor: pointer;
    }
    </style>
</head>
<body>
<form id="profForm">
    <h1>Sistema de Professores</h1>
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
        <button type="submit">Cadastrar</button><button type="reset" id="reset" name="Reset">Limpar</button>
    </form>
</body>
</html>