//SUGESTÃO DE PÁGINA ADMIN

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
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
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
            <li><a class="dropdown-item" href="#">Cadastrar Professores</a></li>
            <li><a class="dropdown-item" href="#">Listar Professores</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Gerenciar Turmas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Cadastrar Turmas</a></li>
            <li><a class="dropdown-item" href="#">Listar Turmas</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Gerenciar Disciplinas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Cadastrar Disciplinas</a></li>
            <li><a class="dropdown-item" href="#">Listar Disciplinas</a></li>
          </ul>
        </li>
    </nav>
    <div class="container mt-3">
      <div class="row">
        <div class="col">
          <?php
            //conexão com o banco
            include('conexao.php');

            //include das páginas
            switch (@$_request['page']){
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