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
    <link rel='stylesheet'  type='text/css' media='screen' href='estilo.css'>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="" method="POST">
         <p>
            <label>Matrícula</label>
            <input type="Number" name="matricula">
         </p>

         <p>
            <label>Senha</label>
            <input type="Number" name="senha">
         </p>

         <p>
            <button type="submit" name="logar" value="Logar">Entrar </button>
         </br> <a href="cadastro.php">Cadastrar-se<a>
         </p>
    </form>
</body>
</html>