?php
/*session_start()
$_SESSION['adm'] = "";
$cadAluno="";
$cadDisciplina="";
$cadProf="";
$_SESSION['cadAluno']="";
$_SESSION['cadDisciplina']="";
$_SESSION['cadProf']="";
if(isset($_POST['adm']) && isset($_POST['cadAluno']) && isset($_POST['cadDisciplina']) && isset($_POST['cadProf'])){
            $_SESSION['adm'] = array(
        'cadAluno' => $_POST['cadAluno'],
        'cadDisciplina' => $_POST['cadDisciplina'],
        'cadProf' => $_POST['cadProf']
      );
    }
    $matricula = (isset($_SESSION['matricula'])? $_SESSION['matricula']: "");
    if(isset($_POST['adm'])){
        if(isset($_POST['logar'])){
            $logar = $_POST['logar'];
            $matricula = (isset($_POST['matricula'])? $_POST['matricula']: "");
            $senha = (isset($_POST['senha'])? $_POST['senha']: "");
            
            $_SESSION['adm'] = array('logar' => $logar,
                            'matricula' => $matricula,
                            'senha' => $senha);
        }
    }*/
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGAP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
       body {
        background-image: url(img/icon.png);
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">SIGAP</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Seja bem-vindo(a)</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h4>Menu de Opções:</h4>
                    <p>
                        <a href="alunos.php" class="btn btn-primary">Gerenciar Alunos</a>
                        <a href="professores.php" class="btn btn-primary">Gerenciar Professores</a>
                        <a href="disciplinas.php" class="btn btn-primary">Gerenciar Disciplinas</a>
                        <a href="turmas.php" class="btn btn-primary">Gerenciar Turmas</a>
                        <a href="muralAvisos.php" class="btn btn-primary">Gerenciar Mural</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>