<?php
$matricula=" ";
$senha=" ";

session_start();

$_SESSION['matricula']="";
$_SESSION['senha']="";

if(isset($_POST['logar'])){
   if(isset($_POST['matricula']) && isset($_POST['senha'])){
      $_SESSION['matricula'] = array(
           'matricula' => $_POST['matricula'],
           'senha' => $_POST['senha']
      );

       header('Location: .php', true, 303);
   }
}
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet'  type='text/css'  href='estilo.css'>
    <title>Login</title>
</head>
<body> 
    <form action="" method="POST">
    <h1>Login</h1>
         <p>
            <label>Matrícula</label>
            <input type="Number" name="matricula">
         </p>

         <p>
            <label>Senha</label>
            <input type="Number" name="senha">
         </p>

         <p class="logar">
            <button type="submit" name="logar" value="Logar">Entrar </button>
         </br> <p class="link">Não tem uma conta? <a href="cadastro.php"> Cadastra-se<a></p>
         </p>
    </form>
</body>
</html>