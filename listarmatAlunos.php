<?php
	$sql = "SELECT * FROM mat_alunos_turmas";
	$res = $mysqli->query($sql);
	$qtd = $res->num_rows;

	include_once('conexao.php');

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
		print "<th>Código do aluno</th>";
		print "<th>Código da turma</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->idAluno_idAluno."</td>";
			print "<td>".$row->idTurmas_idTurmas."</td>";
			print "<td>
					 <button onclick=\"location.href='?page=editarmatAlunos&idMat_Alunos_Turmas=".$row->idMat_Alunos_Turmas."';\" class='btn btn-primary'>Editar</button>

					 <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvarmatAlunos&acao=excluir&idMat_Alunos_Turmas=".$row->idMat_Alunos_Turmas."';}else{false;}\"  class='btn btn-danger'>Excluir</button>
			       </td>";
			
		}
		print "</table>";
	}else{
		print "Não encontrou resultado";
	}
	?>
	