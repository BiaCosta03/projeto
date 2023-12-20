<?php
	$sql = "SELECT * FROM turmas";
	$res = $mysqli->query($sql);
	$qtd = $res->num_rows;

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
        print "<th>turno</th>";
        print "<th>vagas</th>";
        print "<th>alunos matriculados</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->idTurmas."</td>";
			print "<td>".$row->nome."</td>";
            print "<td>".$row->turno."</td>";
            print "<td>".$row->vagas."</td>";
            print "<td>".$row->alunosMatriculados."</td>";
			print "<td>
					 <button onclick=\"location.href='?page=editarTurmas&idTurmas=".$row->idTurmas."';\" class='btn btn-primary'>Editar</button>

					 <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvarTurmas&acao=excluir&idTurmas=".$row->idTurmas."';}else{false;}\"  class='btn btn-danger'>Excluir</button>
			       </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultado";
	}
	?>
