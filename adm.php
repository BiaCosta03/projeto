<?php
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" type='text/css' media='screen' href='main.css'>
    <title>Document</title>
</head>
<body>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SIGAP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Turmas
          </button>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="turmas.php">Turmas</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>