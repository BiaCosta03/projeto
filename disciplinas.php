<!DOCTYPE html>
<html>
<head>
    <title>Gerenciar Disciplinas</title>
    <style>
        body {
        background-image: url(img/icon.png);
    
        }

        table {
            border-collapse: collapse;
            width: 100%;
            background-color: rgba(12, 46, 12, 0.4);
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
    </style>
</head>
<body>

<h2>Sistema de Disciplinas</h2>

<table>
    <tr>
        <th>Disciplina</th>
        <th>Professor</th>
        <th>Código Disciplina</th>
    </tr>
    <tr>
        <td>Matemática</td>
        <td>João Silva</td>
        <td>MAT001</td>
    </tr>
    <tr>
        <td>Física</td>
        <td>Maria Silva</td>
        <td>FIS001</td>
    </tr>
</table>
<a href="editarDisciplina.php"><button>Editar</button></a> <a href="excluirDisciplina.php"><button>Excluir</button></a>
</body>
</html>