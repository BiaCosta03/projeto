<?php

$sql = "SELECT * FROM turmas";

if (isset($_POST['pesquisa']) && $_POST['pesquisa'] != "") {
	$sql .= " WHERE nome like '%" . $_POST['pesquisa'] . "%';";
}


$res = $mysqli->query($sql);
$qtd = $res->num_rows;

?>
<style>
	.box-search {
		display: flex;
		justify-content: center;
		gap: .1%;
	}
</style>
    <div class="row">
        <div class="col-12">
            <h1>Turmas Cadastradas</h1>
        </div>
		<br>
	<form action="principalAdmin.php?page=listarTurmas" method="POST">
		<div class="box-search">
			<input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar" name="pesquisa">
			<button onclick="searchData()" class="btn btn-primary">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search"
					viewBox="0 0 16 16">
					<path
						d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
				</svg>
			</button>
		</div>
	</form>
	</body>

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

					 <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvarTurmas&acao=excluir&idTurmas=".$row->idTurmas."';}else{false;}\"  class='btn btn-danger'>Excluir</button>
			       </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultado";
	}
	?>
