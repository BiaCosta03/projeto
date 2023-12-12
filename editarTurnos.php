<?php
	$sql = "SELECT * FROM turnos WHERE idTurnos=".$_REQUEST['idTurnos'];
	$res = $mysqli->query($sql);
	$row = $res->fetch_object();
?>
<div class="row">
    <div class="col-12">
        <h1>Editar Turma</h1>
        <form action="editarTurnos.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $_GET["idTurnos"] ?>">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input value="<?php echo $turnos->nome ?>" name="nome" required type="text" id="nome" class="form-control" placeholder="Nome">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Editar</button>
            </div>
        </form>
    </div>
</div>