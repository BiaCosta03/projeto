<?php
	$sql = "SELECT * FROM disciplinas";
	$res = $mysqli->query($sql);
	$qtd = $res->num_rows;
	include('conexao.php');

?>
    <div class="row">
        <div class="col-12">
            <h1>Disciplinas Cadastradas</h1>
        </div>
		<?php
        if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s).</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>idDisciplinas</th>";
		print "<th>nome</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->idDisciplinas."</td>";
			print "<td>".$row->nome."</td>";

			print "<td>
					 <button onclick=\"location.href='?page=editarDisciplinas&idDisciplinas=".$row->idDisciplinas."';\" class='btn btn-primary'>Editar</button>

					 <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvarDiciplinas&acao=excluir&idDisciplinas=".$row->idDisciplinas."';}else{false;}\"  class='btn btn-danger'>Excluir</button>
			       </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultado";
	}
	?>