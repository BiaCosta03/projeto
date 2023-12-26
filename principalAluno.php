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
        margin-left: 95px;
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
          <a class="nav-link active" aria-current="page" href="principalAluno.php">Home</a>
        </li>
          <li class="nav-item dropdown">
          <a class="nav-link active" href="?page=boletim" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Boletim
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active" href="?page=infoUsuario" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Imformações Pessoais
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active" href="?page=infoUsuario" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Minhas Turmas
          </a>
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
              case 'boletim':
                include('boletim.php');
                break;

                case 'infoUsuario':
                  include('infoUsuario.php');
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