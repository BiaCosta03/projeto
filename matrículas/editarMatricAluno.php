<?php
     include_once('conexao.php');
    $sql = "SELECT * FROM mat_aluno_turmas WHERE idMat_Aluno_Turmas=".$_REQUEST['idMat_Aluno_Turmas'];
	$res = $mysqli->query($sql);
	$row = $res->fetch_object();
   
?>
<div class="row">
    <div class="col-12">
        <h1>Editar matrícula</h1>
        <form action="salvarMatricAlunos.php" method="POST">
        <input type="hidden" name="acao" value="editar">   
        <input type="hidden" name="idMat_Alunos_Turmas" value="<?php print $row->idMat_Alunos_Turmas; ?>">
            <div class="form-group">
                <label for="Aluno_idAluno">Código do aluno</label>
                <input value="<?php print $row->Aluno_idAluno ?>" name="Aluno_idAluno" id="Aluno_idAluno" required type="INT" class="form-control" placeholder="Code">
            </div>
            <div class="form-group">
                <label for="Turmas_idTurmas">Código da Turma</label>
                <input value="<?php print $row->Turmas_idTurmas ?>" name="Turmas_idTurmas" id="Turmas_idTurmas" required type="INT" class="form-control" placeholder="Code">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Matricular</button>
            </div>
        </form>
    </div> 
</div>