<?php
	$sql = "SELECT * FROM turmas WHERE idTurmas=".$_REQUEST['idTurmas'];
	$res = $mysqli->query($sql);
	$row = $res->fetch_object();
?>
<div class="row">
    <div class="col-12">
        <h1>Editar Turma</h1>
        <form action="?page=salvarTurmas" method="POST">
            <input type="hidden" name="id" value="<?php print $row->idTurmas; ?>">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input value="<?php print $row->nome ?>" name="nome" required type="text" id="nome" class="form-control" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="turnos">Turno</label>
                <input value="<?php print $row->nome ?>" name="vagas" required type="int" id="turnos" class="form-control" placeholder="turnos">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Editar</button>
            </div>
        </form>
    </div>
</div>
