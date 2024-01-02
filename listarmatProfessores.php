<?php

	$sql = "SELECT * FROM turma_disc_professor";
	$res = $mysqli->query($sql);
	$qtd = $res->num_rows;

	include_once('conexao.php');

?>
    <div class="row">
        <div class="col-12">
            <h1>Lista de professores matriculados na turma</h1>
        </div>
		<?php
        if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s).</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>Código da turma</th>";
		print "<th>Código da disciplina</th>";
        print "<th>Código do professor</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->Turmas_idTurmas."</td>";
			print "<td>".$row->Disciplinas_idDisciplinas."</td>";
            print "<td>".$row->Disciplinas_idDisciplinas."</td>";
			print "<td>
					 <button onclick=\"location.href='?page=editarmatProfessores&idTurma_Disc_Professor=".$row->idTurma_Disc_Professor."';\" class='btn btn-primary'>Editar</button>

					 <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvarmatProfessores&acao=excluir&idTurma_Disc_Professor=".$row->idTurma_Disc_Professor."';}else{false;}\"  class='btn btn-danger'>Excluir</button>
			       </td>";
			
		}
		print "</table>";
	}else{
		print "Não encontrou resultado";
	}
	?>
	