
    <!DOCTYPE html>
    <html>
        <head>
            <title>Disciplinas</title>
            
            <!--importando a folha de estilos do bootstrap-->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

            <!--importando nossa folha de estilos-->
            <link rel="stylesheet" href="css/disciplinas.css">

            <!--importando o jquery-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

            <!--importando javascript do bootstrap-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
            
        </head>
        <body>

            <!--corpo da página-->
            
            <?php
                //se foi escolhida alguma disciplina para remoção aparecerá uma janela modal de confirmação de exclusão
                if(isset($_POST['remover'])){
                    $codigo = $_POST['remover'];
                    $d->modalExcluir($codigo);
                }
            ?>


            <div class="container" id="disciplinas">
                <nav class="navbar navbar-light">
                    <h1>Disciplinas</h1>
                    <a class="navbar-brand" href="inserir_disciplina.php">
                        <button class="btn btn-primary">Inserir</button>
                    </a>
                </nav>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="alinos.php">Alunos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="boletim.php">Boletins</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="turmas.php">Turmas</a>
                        </li>
                    </ul>
                </nav>

                <form method="GET" class="form-inline" id="disciplinas_search">   
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="text" class="form-control" name="disciplina" id="disciplina" placeholder="disciplina"
                        <?php
                            if(isset($_GET['disciplina'])){
                                $nome = $_GET['disciplina'];
                                echo('value='.$nome);
                            }
                        ?>
                        >
                    </div>
                    <button type="submit" id="pesquisar" class="btn btn-primary mb-2">Pesquisar</button>
                </form>
                <div id="div_tabela">
                <table class="table table-striped" id="table_disciplinas">
                <tr>
                    <th><a href="turmas.php">Código</a></th>
                    <th><a href="turmas.php">Disciplinas</a></th>
                    <th><a href="turmas.php">Alunos</a></th>
                    <th><a href="turmas.php">Aprovados</a></th>
                    <th><a href="turmas.php">Reprovados</a></th>
                    <th><a href="turmas.php">Recuperação</a></th>
                    <th><a href="turmas.php">Ações</a></th>
                </tr>
                <?php

                    if(isset($_POST['disciplina'])){//se os filtros de busca foram setados os registros serão filtrados

                        $nome = $_POST['disciplina'];
                        $registros = $d->exibir(0, $nome, null, 0);

                    }else{//senão todos os registros serão exibidos

                        $registros = $d->exibir(0, null, null, 0);

                    }

                    //imprimindo os registros
                    while($registro = $registros->fetch()){

                        echo('<tr>');
                        echo('<td>'.$registro['codigo'].'</td>');
                        echo('<td>'.$registro['disciplina'].'</td>');
                        echo('<td>'.$registro['alunos'].'</td>');
                        echo('<td>'.$registro['aprovados'].'</td>');
                        echo('<td>'.$registro['reprovados'].'</td>');
                        echo('<td>'.$registro['recuperacao'].'</td>');
                        echo('<td>');
                        echo("<form method='GET' action='editar_disciplina.php'>");
                        echo("<input type='hidden' name='codigo' value='".$registro['codigo']."'>");
                        echo("<button type='submit' class='btn btn-primary'>Editar</button>");
                        echo("</form>");
                        echo('</td>');
                        echo('<td>');
                        echo("<form method='POST'>");
                        echo("<input type='hidden' name='remover' value='".$registro['codigo']."'>");
                        echo("<button type='submit' class='btn btn-danger'>Remover</button>");
                        echo("</form>");
                        echo('<td>');
                        echo('</tr>');

                    }

                ?>
                               
                </table>
                </div>
            </div>
    
        </body>
    </html>