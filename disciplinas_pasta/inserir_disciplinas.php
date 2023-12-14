
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Inserir Disciplina</title>
            
            <!--importando a folha de estilos do bootstrap-->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

            <!--importando nossa folha de estilos-->
            <link rel="stylesheet" href="css/inserir_disciplina.css">
            
        </head>
        <body>

            <!--corpo da página-->
          
            <div class="container" id="inserir_disciplina">
                <form method="POST">
                <input type="hidden" name="operacao" value="2">
                    <div id="div_title">
                        <p>Inserir disciplina</p>
                    </div>
                    <div id="div_body">
		                <div class="form-group">
                            <input class="form-control" id="nome" name="nome" placeholder="Nome"
                            <?php
                                if(isset($_POST['nome'])){
                                    echo("value='".$_POST['nome']."'");
                                }
                            ?>
                            >
                        </div>
                        
                        <a href="disciplina.php">
		                <button type="submit" class="btn btn-primary mb-2" id="inserir">Inserir</button>
                            </a>
                    </div>                
                </form>
            </div>
            
          
        </body>
    </html>