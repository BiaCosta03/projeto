<?php
	$sql = "SELECT * FROM turmas";
	$res = $mysqli->query($sql);
	$qtd = $res->num_rows;
	include_once('conexao.php');

?>
    <div class="row">
        <div class="col-12">
            <h1>Turmas Cadastradas</h1>
        </div>
		<?php
        if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s).</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>idTurmas</th>";
		print "<th>nome</th>";
		print "<th>Código do turno</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->idTurmas."</td>";
			print "<td>".$row->nome."</td>";
			print "<td>".$row->Turnos_idTurnos."</td>";
			print "<td>
					 <button onclick=\"location.href='?page=editarTurmas&idTurmas=".$row->idTurmas."';\" class='btn btn-primary'>Editar</button>

					 <button onclick=\"location.href='?page=matAlunosTurmas&idTurmas=".$row->idTurmas."';\" class='btn btn-primary'>Matricular Alunos</button>

					 <button onclick=\"location.href='?page=listarmatProfessores&idTurmas=".$row->idTurmas."';\" class='btn btn-primary'>Profesores Matriculados</button>

					 <button onclick=\"location.href='?page=matProfessorTurmas&idTurmas=".$row->idTurmas."';\" class='btn btn-primary'>Matricular Professsores</button>

					 <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvarTurmas&acao=excluir&idTurmas=".$row->idTurmas."';}else{false;}\"  class='btn btn-danger'>Excluir</button>
			       </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultado";
	}
	?>
