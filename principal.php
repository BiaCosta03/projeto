<?php
include_once('conexao.php');

$msg_erro = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $matricula = $_POST["matricula"];
   $senha = $_POST["senha"];

   $sql = "SELECT * FROM usuarios where matricula= '" . $matricula . "' AND senha='" . $senha . "'";

   $res = mysqli_query($mysqli, $sql);



   if($res->num_rows > 0){
      $row = mysqli_fetch_array($res);


      if ($row["username"] == "admin"){
         header("location:principalAdmin.php");
      }else if($row["username"] == "professor"){
         //preencher
      }else if($row["username"] == "aluno"){
         //preencher
      }
   }else{
      $msg_erro = "Usuário ou senha incorretos.";
   }

 

}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset='utf-8'>
   <meta http-equiv='X-UA-Compatible' content='IE=edge'>
   <meta name='viewport' content='width=device-width, initial-scale=1'>
   <script src='main.js'></script>
   <link rel='stylesheet' type='text/css'>
   <title>SIGAP</title>
   <style>
     body {
         background-color: #91DF76;
         width: 100%;
         height: 580px;
      }

      .secao {
         margin-top: auto;
         width: 100%;
         height: 580px;
         display: flex;
         align-items: center;
         justify-content: center;
         /*border: 1px solid black;*/

      }

      .container {
         width: 800px;
         height: 500px;
         border: 1px #7FFF00;
         border-radius: 5px;
         /*background-color: rgba(12, 46, 12, 0.4);*/
         display: flex;
      }

      .informacoes,
      .login {
         display: grid;
         place-items: center;
         width: 50%;
         height: 100%;
         text-align: center;
         border: 1px solid #006400;
      }

      .informacoes {
         background-image: url('img/SIGAP.png');
         background-repeat: no-repeat;
         background-position: center;
         color: orange;
         background-color: #cccccc;
         /* -webkit-text-stroke-witdh:1px;
    -webkit-text-stroke-color:#000;*/
      }

      .continformacoes {
         opacity: 1.0;
         color: black;
      }


      .login {
         background-color: white;
      }

      .formlogin {
         border: 1px solid rgb(255, 255, 255);
         margin: 10px;
         display: flex;
         align-items: center;
         justify-content: center;

      }

      .botaoform {
         color: white;
         background-color: #91DF76;
         border-radius: 5px;
         box-shadow: 5px 5px 5px darkgreen;
         text-align: center;
         padding: 10px;
         margin-left: 35%;
         margin-right: 35%;
         font-weight: bold;
         width: fit-content;
         text-decoration: none;
      }

      .me{
         width: 100%;
         padding: 10px;
         margin-bottom: 20px;
         box-sizing: border-box;
         border: 1px solid #006400;
         outline: none;
         background-color: #f1f1f1;
      }


      
   </style>

</head>

<body>
   <div class="secao">
      <div class="container">
         <div class="informacoes">
            <div class="continformacoes">
               <h1>Seja Bem-Vindo(a)</h1>
               <h3>
                  <p>Esse é um projeto desenvolvido por alunos do IFRN-Campus Canguaretama </p>
                  <p>O principal objetivo é ajudar no desenvolvimento do sistema de gestão escolar da escola municipal
                     Professora Nazaré de Andrade Duarte(ND).
               </h3>
               </p>
            </div>


         </div>

         <div class="login">

            <div class="formlogin">
               <form action="principal.php" method="POST">
                  <h2> <?php echo $msg_erro ?> </h2>
                  <h1>Login</h1>

                  
                  <div>
                  <label >Matrícula</label>
                  <input class="me" type="varchar" name="matricula" />
                  </div>
                  </br>
                  
                  <div>
                  <label >Senha</label>
                  <input class="me" type="password" name="senha" />
                  </div>
                  </br>
                  
                  

                  <input class="botaoform" type="submit" value="Entrar">

               </form>
            </div>
         </div>
      </div>
</body>

</html>