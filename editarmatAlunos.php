<?php
include_once('conexao.php');
    $sql = "SELECT * FROM mat_alunos_turmas WHERE idMat_Alunos_Turmas =".$_REQUEST['idMat_Alunos_Turmas'];
	$res = $mysqli->query($sql);
	$row = $res->fetch_object();
    
?>
<div class="row">
    <div class="col-12">
        <h1>Editar matrícula</h1>
        <form action="?page=salvarmatAlunos" method="POST"> 
        <input type="hidden" name="acao" value="editar">   
        <input type="hidden" name="idAluno" value="<?php print $row->idMat_Alunos_Turmas; ?>">
            <div class="form-group">
            <tr>
                <td><label for="Aluno_idAluno">Código do Aluno</td>
                <td><input value="<?php print $row->Aluno_idAluno; ?>" name="Aluno_idAluno" id="Aluno_idAluno" required type="text" class="form-control" placeholder="Código"></td>
    </tr>
            <tr>
                <td><label for="Turmas_idTurmas">Nome da Turma</td>
                <td><input value="<?php print $row->Turmas_idTurmas; ?>" name="Turmas_idTurmas" id="Turmas_idTurmas" required type="text" class="form-control" placeholder="Código"><td>
            </td>
            <div class="mb-3">
		    <button type="hidden" class="btn btn-success">Editar</button>
	        </div>
        </form>
    </div> 
</div>
