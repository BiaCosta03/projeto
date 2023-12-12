<?php
	$sql = "SELECT * FROM turmas WHERE idTurmas=".$_REQUEST['idTurmas'];
	$res = $mysqli->query($sql);
	$row = $res->fetch_object();
?>
<div class="row">
    <div class="col-12">
        <h1>Editar Turma</h1>
        <form action="editarTurmas.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $_GET["idTurmas"] ?>">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input value="<?php echo $turmas->nome ?>" name="nome" required type="text" id="nome" class="form-control" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="turnos">Turno</label>
                <input value="<?php echo $turmas->nome ?>" name="vagas" required type="int" id="turnos" class="form-control" placeholder="turnos">
            </div>
            <div class="form-group">
                <label for="vagas">Vagas</label>
                <input value="<?php echo $turmas->nome ?>" name="vagas" required type="int" id="vagas" class="form-control" placeholder="vagas">
            </div>
            <div class="form-group">
                <label for="alunosMatriculados">Alunos matriculados</label>
                <input value="<?php echo $turmas->nome ?>" name="alunosMatriculados" required type="int" id="alunosMatriculados" class="form-control" placeholder="alunosMatriculados">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Editar</button>
            </div>
        </form>
    </div>
</div>