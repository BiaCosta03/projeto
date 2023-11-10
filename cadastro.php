<?php
$nomeS=" ";
$NovaMat=" ";
$ns=" ";

session_start();

$_SESSION['NovaMat']="";
$_SESSION['ns']="";
$_SESSION['nomeS']="";

if(isset($_POST['NovaMat']) && isset($_POST['nomeS']) && isset($_POST['ns'])){
            $_SESSION['NovaMat'] = array(
        'nomeS' => $_POST['nomeS'],
        'NovaMat' => $_POST['NovaMat'],
        'ns' => $_POST['ns']
      );

       header('Location: .php', true, 303);
   }

if ( isset($_POST['dados']) ) {

    $query = "INSERT INTO ".$table." (versao, revisao, data) VALUES ('".$ns."', '".$NovaMat."', '".$nomeS."')";

    $resultado= mysqli_query($conn, $query);

    if(mysqli_insert_id($conn)) {
      $_SESSION['msg'] = "<div class='alert alert-success'>Alun@ cadastrad@ com sucesso!</div>";
    }else{
      $_SESSION['msg'] = "<div class='alert alert-danger'>Ocorreu um erro inesperado ao cadastrar!</div>";
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro</h1>
    <form method="post" action="">

        <?php

            // Mostra a msg q está na variável global $_SESSION
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>

        <p>
        <label for="">Nome e Sobrenome:</label>
        <input type="text" name="nomeS"> 
        </p>

        <p>
        <label for="">Matrícula</label>
        <input type="number" name="NovaMat">
        </p>

        <p>
        <label for="">Nova senha:</label>
        <input type="text" name="ns">
        </p>

        <input type="hidden" name="dados">
    </form>

    <p>
        <button type="submit" name="cadastrar" value="cadastrar">Cadastrar</button>
    </p>
</body>
</html>