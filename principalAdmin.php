<?php
    
    include_once('conexao.php');
 
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGAP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
   
    <style>
      body{
        background-color: #91DF76;
      }
      li {
        display: inline;
    }
      a{
        display: block;
        padding: 70px 0;
        background-color: #98FB98;
        margin-left: 25px;
        width: 100%;
      }
      img{
        max-width: 25+0px;
        max-height:250px;
        top: 0px;
        right: 0px;
        left: 0px;
        margin: 0px auto;
      }
      .row{
        text-align: center;
      }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <img src="img/SIGAP.png">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Seja bem-vindo(a)</h2>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="principalAdmin.php">Home </a>
        </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Gerenciar Alunos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrarAlunos">Cadastrar Alunos</a></li>
            <li><a class="dropdown-item" href="?page=listarAlunos">Listar Alunos</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Gerenciar Professores
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrarProfessores">Cadastrar Professores</a></li>
            <li><a class="dropdown-item" href="?page=listarProfessores">Listar Professores</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Gerenciar Turmas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrarTurma">Cadastrar Turmas</a></li>
            <li><a class="dropdown-item" href="?page=listarTurmas">Listar Turmas</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Gerenciar Disciplinas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrarDisciplinas">Cadastrar Disciplinas</a></li>
            <li><a class="dropdown-item" href="?page=listarDisciplinas">Listar Disciplinas</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Gerenciar Turnos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrarTurno">Cadastrar Turnos</a></li>
            <li><a class="dropdown-item" href="?page=listarTurnos">Listar Turnos</a></li>
          </ul>
        </li>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="sair.php">Sair</a>
        </li>
    </nav>
    <div class="container mt-3">
      <div class="row">
        <div class="col">
          <?php
            //conexão com o banco
            include('conexao.php');

            //include das páginas
            switch (@$_REQUEST['page']){
              //Alunos
              case 'cadastrarAlunos':
                include('cadastrarAlunos.php');
                break;
              case 'listarAlunos':
                include('listarAlunos.php');
                break;
              case 'editarAlunos':
                include('editarAlunos.php');
                break;
              case 'salvarAlunos':
                include('salvarAlunos.php');
                break;
                case 'infoAluno':
                  include('infoAluno.php');
                  break;

                //Professoresofessores
              case 'cadastrarProfessores':
                include('cadastrarProfessores.php');
                break;
              case 'listarProfessores':
                include('listarProfessores.php');
                break;
              case 'editarProfessores':
                include('editarProfessores.php');
                break;
              case 'salvarProfessores':
                include('salvarProfessores.php');
                break;
                case 'infoProfessor':
                  include('infoProfessor.php');
                  break;

                //Turmas
              case 'cadastrarTurma':
                include('cadastrarTurma.php');
                break;
              case 'cadastrarTurmas':
                include('cadastrarTurmas.php');
                break;
              case 'listarTurmas':
                include('listarTurmas.php');
                break;
              case 'editarTurmas':
                include('editarTurmas.php');
                break;
              case 'salvarTurmas':
                include('salvarTurmas.php');
                break;

                //Matrículas
              case 'salvarmatAlunos':
                  include('salvarmatAlunos.php');
                  break;
                  case 'salvarmatProfessores':
                    include('salvarmatProfessores.php');
                    break;
              case 'listarmatAlunos':
                  include('listarmatAlunos.php');
                  break;
              case 'matAlunosTurmas':
                  include('matAlunosTurmas.php');
                  break;
              case 'editarmatAlunos':
                  include('editarmatAlunos.php');
                  break;
              case 'listarmatProfessores':
                  include('listarmatProfessores.php');
                  break;
              case 'matProfessorTurmas':
                    include('matProfessorTurmas.php');
                  break;

  

                //Turnos
              case 'cadastrarTurno':
                include('cadastrarTurno.php');
                break;
              case 'listarTurnos':
                include('listarTurnos.php');
                break;
              case 'editarTurnos':
                include('editarTurnos.php');
                break;
              case 'salvarTurnos':
                include('salvarTurnos.php');
                break;

                //Disciplinas
              case 'cadastrarDisciplinas':
                include('cadastrarDisciplinas.php');
                break;
              case 'listarDisciplinas':
                include('listarDisciplinas.php');
                break;
              case 'editarDisciplinas':
                include('editarDisciplinas.php');
                break;
              case 'salvarDisciplinas':
                include('salvarDisciplinas.php');
                break;

              default:
              print"";
            }
          ?>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
