<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/principal.css'>
    <script src='main.js'></script>
    <style>
        .login{
            background-image: url('img/icon.png');
            background-repeat: no-repeat;
            background-position: center;
            width: 100%;
            height: 500px;
            color: orange;
            background-color: #cccccc;
            opacity: 0.5;        
        }
        .telalogin{
            text-align: center;
        }
    </style>
</head>
<body>
<div class="secao">
        <div class="container">
            <div class="informacoes">
           
            <h1>Seja Bem-Vindo(a)</h1>
            <h3><p>Esse é um projeto desenvolvido por alunos do IFRN-Campus Canguaretama </p>
            <p>O principal objetivo é ajudar no desenvolvimento do sistema de gestão escolar da escola municipal
            Professora Nazaré de Andrade Duarte(ND).</h3> </p>

            </div>
            <div class="login">
            
                <div class="formlogin">
                <form action="login.php" method="POST">
                <h1>Login</h1>

                <p>
                <label>Matrícula</label>
                <input type="Number" name="matricula">
                </p>

                <p>
                <label>Senha</label>
                <input type="Number" name="senha">
                </p>

                    <div class="botaoform">
                        <a href="adm.php">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>