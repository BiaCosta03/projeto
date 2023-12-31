<?php
	$sql = "SELECT * FROM historico_boletins";
	$res = $mysqli->query($sql);
	$qtd = $res->num_rows;

?>
<style>
        .box-search{
            display: flex;
            justify-content: center;
            gap: .1%;
        }
    </style>
	
	<div class="row">
        <div class="col-12">
            <h1>Lista de estudantes</h1>
        </div>
		<br>
   
        </button>
    </div>
</body>
		<?php
        if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s).</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>Código</th>";
		print "<th>Nota 1</th>";
		print "<th>Nota 2</th>";
		print "<th>Nota 3</th>";
		print "<th>Nota 4</th>";
		print "<th>Prova Final</th>";
		print "<th>Média Final</th>";
		print "<th>Matrícula do aluno</th>";
		print "<th>Matrícula do professor</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->idHistorico_Boletins."</td>";
			print "<td>".$row->nota1Bim."</td>";
			print "<td>".$row->nota2Bim."</td>";
			print "<td>".$row->nota3Bim."</td>";
			print "<td>".$row->nota4Bim."</td>";
			print "<td>".$row->provaFinal."</td>";
			print "<td>".$row->mediaFinal."</td>";
			print "<td>".$row->Mat_Alunos_Turmas_idMat_Alunos_Turmas."</td>";
			print "<td>".$row->Turma_Disc_Professor_idTurma_Disc_Professor ."</td>";
			print "<td>
					 <button onclick=\"location.href='?page=editarAlunos&idAluno=".$row->idAluno."';\" class='btn btn-primary'>Editar</button>

					 <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvarAlunos&acao=excluir&idAluno=".$row->idAluno."';}else{false;}\"  class='btn btn-danger'>Excluir</button>
			       </td>";
			
		}
		print "</table>";
	}