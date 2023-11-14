<?php
session_start()

$_SESSION['usuario'] = "";

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
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--NAVBAR-->
    <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <!--<img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">-->
        SIGAP
        </a>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
    </div>
    </nav>
</body>
</html>