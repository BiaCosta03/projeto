<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Disciplina</title>
    <style>
        body{
            background-image: url(img/icon.png)
        }
        .form{
            border: 2px solid black;
            border-radius: 50px
            text-alig
        }
    </style>
</head>
<body>
    <form action="disciplinas.php" method="POST">
        <h1>Editar</h1>
        <label for="">Disciplina:</label>
        <input type="text" name="Disciplina">
        <br>
        <label for="">Código da Disciplina</label>
        <input type="number" name="CodDisciplina">
        <br>
        <label for="">Professor</label>
        <input type="text" name="name">
        <br>
        <a href="disciplinas.php"><button>Editar</button></a>
    </form>
</body>
</html>