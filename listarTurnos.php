<?php
	$sql = "SELECT * FROM turnos";
	$res = $mysqli->query($sql);
	$qtd = $res->num_rows;

?>
    <div class="row">
        <div class="col-12">
            <h1>Turnos Cadastrados</h1>
            <a href="cadastrarTurnos.php" class="btn btn-info my-2">Cadastrar novo turno</a>
        </div>
		<?php
        if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s).</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>idTurnos</th>";
		print "<th>nome</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->idTurnos."</td>";
			print "<td>".$row->nome."</td>";

			print "<td>
					 <button onclick=\"location.href='?page=edtarTuross&idTurnos=".$row->idTurnos."';\" class='btn btn-primary'>Editar</button>

					 <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvarTurnos&acao=excluir&idTurnos=".$row->idTurnos."';}else{false;}\"  class='btn btn-danger'>Excluir</button>
			       </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultado";
	}
	?>
