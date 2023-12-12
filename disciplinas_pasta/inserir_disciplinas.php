<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        .form{
    margin-top:50px;
    overflow-x: auto;
    height:200px; 
    background-color:darkseagreen;
    font-family: Georgia, 'Times New Roman', Times, serif;
}
</style>
</head>
<body>
<div class="row">
    <div class="col-12">
        <h1>Registro de disciplina</h1>
        <div class="form">
        <form action="disciplinas_pasta/guardar_disciplina.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input name="nome" required type="text" id="nome" class="form-control" >
            </div></br>
            <div class="form-group">
                <label for="codigo">Código:</label>
                <input name="codigo" required type="text" id="codigo" class="form-control" >
            </div></br>
            <div class="form-group">
                <label for="docente">Docente:</label>
                <input name="docente" required type="text" id="docente" class="form-control" >
            </div></br>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Guardar</button>
            </div>
        </form>
</div>
    </div>
</div> 
</body>
</html>