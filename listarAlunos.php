<?php
	$sql = "SELECT * FROM aluno";
	$res = $mysqli->query($sql);
	$qtd = $res->num_rows;


?>
    <div class="row">
        <div class="col-12">
            <h1>Lista de estudantes</h1>
        </div>
		<?php
        if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s).</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>Código</th>";
		print "<th>Nome</th>";
		print "<th>Matrícula</th>";
		print "<th>cpf</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->idAluno."</td>";
			print "<td>".$row->nome."</td>";
			print "<td>".$row->matrícula."</td>";
			print "<td>".$row->cpf."</td>";
			print "<td>
					 <button onclick=\"location.href='?page=editarAlunos&idAluno=".$row->idAluno."';\" class='btn btn-primary'>Editar</button>

					 <button onclick=\"location.href='?page=infoUsuario&idAluno=".$row->idAluno."';\" class='btn btn-primary'>Dados Pessoais</button>

					 <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvarAlunos&acao=excluir&idAluno=".$row->idAluno."';}else{false;}\"  class='btn btn-danger'>Excluir</button>
			       </td>";
			
		}
		print "</table>";
	}else{
		print "Não encontrou resultado";
	}
	?>
	