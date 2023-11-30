<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mural de Avisos</title>
    <style>
        .body{
            background-image: url(img/icon.png);
        }
        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 40%;
            padding: 20px;
            margin: 20px;
            background-color: #f1f1f1;
            border-radius: 5px;
            border: 2px solid black;
        }
       
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
        }
        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
        }

    </style>
</head>
<body>
     <div class="container">
        <div class="card">
            <h2>Mural de Avisos</h2>
            <p>AVISO 1: Assembleia Geral da Turma de 2023 marcada para amanhã às 15h.</p>
            <p>AVISO 2: Avaliação da Unidade I será realizada amanhã, no horário de aula.</p>
            <p>AVISO 3: Inscrições para a olimpíada de informática estão abertas até sexta-feira, às 12h.</p>
            <button class="button">Atualizar Avisos</button>
        </div>
    </div>
</body>
</html>