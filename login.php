<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet'  type='text/css'  href='estilo.css'>
    <title>Login</title>
</head>
<body> 
    <form action="Login.php" method="POST">
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
         <p class="logar">
            <a href=""><button type="submit" name="logar" value="Logar">Entrar </button></a>
         </p>      
    </form>
</body>
</html>
