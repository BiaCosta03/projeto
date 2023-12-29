<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
     <script src='main.js'></script>
    <link rel='stylesheet'  type='text/css'  >
    <title>SIGAP</title>
    <style>
body{
    background-color: #91DF76;
    width: 100%;
    height: 580px;
 }
 
.secao{
    margin-top: auto;
    width: 100%;
    height: 580px;
    display: flex;
    align-items: center;
    justify-content: center;
    /*border: 1px solid black;*/

 }
 .container{
    width: 800px;
    height: 500px;
    border: 1px  #7FFF00;
    border-radius: 5px;
    /*background-color: rgba(12, 46, 12, 0.4);*/
    display: flex;
 }
 
 .informacoes, .login{
    display: grid;
    place-items: center;
    width: 50%;
    height: 100%;
    text-align: center;
    border: 1px solid #006400;
 }

 .informacoes{
    background-image: url('img/SIGAP.png');/*Precisamos de uma imagem de fundo*/
    background-repeat: no-repeat;
    background-position: center;
    color: orange;
    background-color: #cccccc;
   /* -webkit-text-stroke-witdh:1px;
    -webkit-text-stroke-color:#000;*/    
 }

 .continformacoes{
    opacity: 1.0;
    color:black;
 }

 
 .login{
    background-color: white;
 }
 
 .formlogin{
    border: 1px solid rgb(255, 255, 255);
    margin: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    
 }
 
 .botaoform{
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

    </style>


</head>
<body>
    <div class="secao">
        <div class="container">
            <div class="informacoes">
                <div class="continformacoes">
                    <h1>Seja Bem-Vindo(a)</h1>
                    <h3><p>Esse é um projeto desenvolvido por alunos do IFRN-Campus Canguaretama </p>
                    <p>O principal objetivo é ajudar no desenvolvimento do sistema de gestão escolar da escola municipal
                    Professora Nazaré de Andrade Duarte(ND).</h3> </p>
                </div>
                

            </div>
            
            <div class="login">
            
                <div class="formlogin">
                <form action="login.php" method="POST">
                <h1>Login</h1>

                <p>
                <label>Matrícula</label>
                <input type="Number" name="matrícula">
                </p>

                <p>
                <label>Senha</label>
                <input type="Number" name="senha">
                </p>

                <input class="botaoform" type="submit" name="submit" value="Login">

                </form>
                </div>
        </div>
    </div>
</body>
</html>