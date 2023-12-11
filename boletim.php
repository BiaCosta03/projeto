
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Boletins</title>
            
            <!--importando a folha de estilos do bootstrap-->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

            <!--importando nossa folha de estilos-->
            <link rel="stylesheet" href="css/boletins.css">

            <!--importando o jquery-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

            <!--importando javascript do bootstrap-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
            
        </head>
        <body>

            <!--corpo da página-->

            <?php
                //se um boletim foi selecionado para exclusão aparecerá uma janela modal perguntando se deseja mesmo excluir
                if(isset($_POST['remover'])){
                    $id = $_POST['remover'];
                    $b->modalExcluir($id);
                }
            ?>

            <div class="container" id="boletins">
                <nav class="navbar navbar-light">
                    <h1>Boletins</h1>
                    <a class="navbar-brand" href="inserir_boletim.php">
                        <button class="btn btn-primary">Inserir</button>
                    </a>
                </nav>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="alunos.php">Alunos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="disciplina.php">Disciplinas</a>
                        </li>
                    </ul>
                </nav>

                <form method="GET" class="form-inline" id="boletins_search">   
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="text" class="form-control" name="aluno" id="aluno" placeholder="aluno"
                        <?php
                            if(isset($_GET['aluno'])){

                                $nome_aluno = $_GET['aluno'];
                                echo('value='.$nome_aluno);

                            }
                        ?>
                        >
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="text" class="form-control" name="disciplina" id="disciplina" placeholder="disciplina"
                        <?php
                            if(isset($_GET['disciplina'])){

                                $nome_disciplina = $_GET['disciplina'];
                                echo('value='.$nome_disciplina);

                            }
                        ?>
                        >
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <select class="form-control" name="situacao" id="situacao">
                            <?php

                                $situacoes = array();
                                $situacoes[0] = "Situação";
                                $situacoes[1] = "Aprovado";
                                $situacoes[2] = "Reprovado";
                                $situacoes[3] = "Recuperação";

                                for($i = 0; $i < 4; $i++){
                                    if(isset($_POST['situacao'])){
                                        $situacao = (int) $_POST['situacao'];
                                        if($situacao == $i){
                                            echo('<option selected value='.$i.'>'.$situacoes[$i].'</option>');
                                        }else{
                                            echo('<option value='.$i.'>'.$situacoes[$i].'</option>');
                                        }
                                    }else{
                                        echo('<option value='.$i.'>'.$situacoes[$i].'</option>');
                                    }
                                }

                            ?>
                        </select>
                    </div>
                    <button type="submit" id="pesquisar" class="btn btn-primary mb-2">Pesquisar</button>
                </form>
                <div id="div_tabela">
                <table class="table table-striped" id="table_boletins">
                <tr>
                    <th><a href="turmas.php">Matrícula</a></th>
                    <th><a href="turmas.php">Aluno</a></th>
                    <th><a href="turmas.php">Disciplina</a></th>
                    <th><a href="boletim.php">Nota 1</a></th>
                    <th><a href="boletim.php">Nota 2</a></th>
                    <th><a href="boletim.php">Nota 3</a></th>
                    <th><a href="boletim.php">Nota 4</a></th>
                    <th><a href="boletim.php">Média</a></th>
                    <th><a href="boletim.php">Situação</a></th>
                    <th><a href="principalAdmin.php">Ações</a></th>
                </tr>
                <?php
                    
                    if(isset($_GET['aluno']) && isset($_GET['disciplina']) && isset($_GET['situacao'])){//se os filtros de busca foram setados
                        $aluno = $_GET['aluno'];
                        $disciplina = $_GET['disciplina'];
                        $situacao = $_GET['situacao'];

                        $registros = $b->exibir(0, $aluno, $disciplina, $situacao);//carregando os registros de acordo com os filtros
                    }else{//senão foram setados
                        $registros = $b->exibir(0, null, null, 0);//carregando todos os registros
                    }

                    //imprimindo os registros em uma tabela
                    while($registro = $registros->fetch()){

                        echo('<tr>');
                        echo('<td>'.$registro['matricula'].'</td>');
                        echo('<td>'.$registro['aluno'].'</td>');
                        echo('<td>'.$registro['disciplina'].'</td>');
                        echo('<td>'.$registro['nota1'].'</td>');
                        echo('<td>'.$registro['nota2'].'</td>');
                        echo('<td>'.$registro['nota3'].'</td>');
                        echo('<td>'.$registro['nota4'].'</td>');
                        echo('<td>'.$registro['media'].'</td>');
                        echo('<td>'.$registro['situacao'].'</td>');
                        echo('<td>');
                        echo("<form method='GET' action='editar_boletim.php'>");
                        echo("<input type='hidden' name='id' value='".$registro['id']."'>");
                        echo("<button type='submit' class='btn btn-primary'>Editar</button>");
                        echo("</form>");
                        echo('</td>');
                        echo('<td>');
                        echo("<form method='POST'>");
                        echo("<input type='hidden' name='remover' value='".$registro['id']."'>");
                        echo("<button type='submit' class='btn btn-danger'>Remover</button>");
                        echo("</form>");
                        echo('</tr>');

                    }
                    
                ?>
                               
                </table>
                </div>

            </div>
    
        </body>
    </html>