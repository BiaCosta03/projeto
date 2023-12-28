<?php
	$sql = "SELECT * FROM mat_alunos_turmas";
	$res = $mysqli->query($sql);
	$qtd = $res->num_rows;


?>
    <div class="row">
        <div class="col-12">
            <h1>Lista de alunos matriculados na turma</h1>
        </div>
		<?php
        if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s).</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>Código da matrícula</th>";
		print "<th>Código do aluno</th>";
		print "<th>Código da turma</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->idMat_Alunos_Turmas."</td>";
			print "<td>".$row->Aluno_idAluno."</td>";
			print "<td>".$row->Turmas_idTurmas."</td>";
			print "<td>
					 <button onclick=\"location.href='?page=editarmatAlunos&idMat_Alunos_Turmas=".$row->idMat_Alunos_Turmas."';\" class='btn btn-primary'>Editar matrícula</button>

					 <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvarmatAlunos&acao=excluir&idMat_Alunos_Turmas=".$row->idMat_Alunos_Turmas."';}else{false;}\"  class='btn btn-danger'>Excluir</button>
			       </td>";
			
		}
		print "</table>";
	}else{
		print "Não encontrou resultado";
	}
	?>
	