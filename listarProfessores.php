<?php
	$sql = "SELECT * FROM professores";
	$res = $mysqli->query($sql);
	$qtd = $res->num_rows;

?>
    <div class="row">
        <div class="col-12">
            <h1>Lista de estudantes</h1>
            <a href="cadastrarProfessores.php" class="btn btn-info my-2">Cadastrar</a>
        </div>
		<?php
        if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s).</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>Nome</th>";
		print "<th>Matricula</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->nome."</td>";
			print "<td>".$row->idProfessores."</td>";
			print "<td>
					 <button onclick=\"location.href='?page=edtarProfessores&idProfessores=".$row->idProfessores."';\" class='btn btn-primary'>Editar</button>

					 <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvarProfessores&acao=excluir&idProfessores=".$row->idProfessores."';}else{false;}\"  class='btn btn-danger'>Excluir</button>
			       </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultado";
	}
	?>