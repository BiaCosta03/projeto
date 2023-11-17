<?php
$nomeS=" ";
$NovaMat=" ";
$ns=" ";
$date=" ";
$cpf=" ";
$telefone=" ";

session_start();

$_SESSION['NovaMat']="";
$_SESSION['ns']="";
$_SESSION['nomeS']="";
$_SESSION['date']="";
$_SESSION['cpf']="";
$_SESSION['telefone']="";

if(isset($_POST['NovaMat']) && isset($_POST['nomeS']) && isset($_POST['ns']) && isset($_POST['date']) && isset($_POST['cpf']) && isset($_POST['telefone'])){
            $_SESSION['NovaMat'] = array(
        'nomeS' => $_POST['nomeS'],
        'NovaMat' => $_POST['NovaMat'],
        'ns' => $_POST['ns'],
        'date' => $_POST['date'],
        'cpf' => $_POST['cpf'],
        'telefone' => $_POST['telefone']
      );

       header('Location: adm.php', true, 303);
   }

if ( isset($_POST['dados']) ) {

    $query = "INSERT INTO ".$table." (versao, revisao, data) VALUES ('".$ns."', '".$NovaMat."', '".$nomeS."', '".$date."', '".$cpf."', '".$telefone."')";

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
    <meta http-equiv="X-UA-Compatiple" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet'  type='text/css'  href='estilo.css'>
    <title>Cadastro</title>
</head>
<body>
    <form method="post" action="">
    <h1>Cadastro</h1>
        <?php

            // Mostra a msg q está na variável global $_SESSION
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>

        <p>
        <label for="">Nome e Sobrenome:</label>
        <input type="text" name="name">
        </p>

        <p>
        <label for="">Data de nascimento:</label>
        <input type="date" name="date" value="1990-01-01">
        </p>

        <p>
        <label for="">Matrícula:</label>
        <input type="number" name="NovaMat" maxlength="15">
        </p>

        <p>
        <label for="">Senha:</label>
        <input type="text" name="ns" maxlength="16">
        </p>

        <p>
        <label for="">CPF:</label>
        <input type="text" name="cpf" maxlength="11" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}">
        <small>Formato: 999.999.999-99</small>
        </p>

        <p>
        <label for="telefone">Telefone:</label>
        <input type="tel" name="telefone" pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}">
        <small>Formato: 11-9999-9999</small>
        </p>

        <input type="hidden" name="dados">

        <p class="logar">
            <button type="submit" name="logar" value="Logar">Cadastrar</button>
         </p>

    </form>

    
</body>
</html>
