<?php
 $sql = "SELECT * FROM mat_alunos_turmas";
 $res = $mysqli->query($sql);
 $row = $res->fetch_object();
 include_once('conexao.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatiple" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
   
    <title>Cadastro</title>
    <style>
        body{
            background-color: #91DF76;
        }
    </style>
</head>
<body>
<form action="?page=salvarmatAlunos" method="POST">
	<input type="hidden" name="acao" value="cadastrar">

    <h1>Matricular Aluno na Turma</h1>
    <form action="salvarmatAlunos.php" method="POST">

    <tr>
         <td><label for="Aluno_idAluno">Aluno</td>

         <td>
            <select name="Aluno_idAluno" id="Aluno_idAluno" class="form-control">
 
            <?php
            $sql = "SELECT * FROM aluno";
            $res = $mysqli->query($sql);
            $qtd = $res->num_rows;
                                
            if($qtd > 0){
            while($row = $res->fetch_object()){
            echo "<option value='". $row->idAluno . "'>" .$row->nome. "</option>";

        }
            }else{
            echo "<option value='-1'>----</option>";
                }
            ?>
            </select>
        </td>
    </tr>
    
    <tr>
         <td><label for="Turmas_idTurmas">Turma</td>

         <td>
            <select name="Turmas_idTurmas" id="Turmas_idTurmas" class="form-control">
 
            <?php
            $sql = "SELECT * FROM turmas";
            $res = $mysqli->query($sql);
            $qtd = $res->num_rows;
                                
            if($qtd > 0){
            while($row = $res->fetch_object()){
            echo "<option value='". $row->idTurmas . "'>" .$row->nome. "</option>";

        }
            }else{
            echo "<option value='-1'>----</option>";
                }
            ?>
            </select>
        </td>
    </tr>

           
                <button class="btn btn-success" type="submit">Cadastrar</button>
            </div>
        </form>
</body>
</html>