<?php
session_start();

$usuario="";

//NOVO CADASTRO
$matricula=" ";
$senha=" ";

$_SESSION['matrícula']="";
$_SESSION['senha']="";

if(isset($_POST['logar'])){
   if(isset($_POST['matrícula']) && isset($_POST['senha'])){
      $_SESSION['matricula'] = array(
           'matricula' => $_POST['matrícula'],
           'senha' => $_POST['senha']
      );

      /*if(isset($_POST['logar'])){
        if(isset($_POST['nome']) && isset($_POST['usuario']) && isset($_POST['end'])){
            $_SESSION['usuario'] = array(
                'nome' => $_POST['nome'],
                'usuario' => $_POST['usuario'],
                'end' => $_POST['end']
            );*/
            header('Location: adm.php', true, 303);
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
    <form action="login.php" method="POST">
    <h1>Login</h1>
         <p>
            <label>Matrícula</label>
            <input type="text" name="matrícula" 
            class= "form-control">
         </p>

         <p>
            <label>Senha</label>
            <input type="password" name="senha"
            class= "form-control">
         </p>
         <?php
            if($usuario == "aluno"){
                  echo "Aluno";
            }else if($usuario == "prof"){
                  echo "Professor";
            }else if($usuario == "adm"){
                  echo "Administrador";
            }
         ?>

         <p class="logar">
            <a href="adm.php"><button type="submit" name="logar" value="Logar">Entrar </button></a>
         </p>

         <?php
            if($usuario == "aluno"){
                echo $aluno;
            }else if($usuario == "prof"){
                echo $prof;
            }else if($usuario == "adm"){
               echo $adm;
            }
        ?>       
    </form>
</body>
</html>
