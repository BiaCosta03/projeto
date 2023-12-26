<?php
	include "conexao.php";
	
	// Exibi as notas
	$selectHistorico_boletins = "SELECT * FROM historico_boletins";
	$queryHistorico_boletins = $mysqli->query($selectHistorico_boletins);
	
	function exibirHistorico_boletins(){
		global $queryHistorico_boletins;
		if ($queryHistorico_boletins->num_rows > 0){
			print "<table class='table table-bordered table-striped table-hover'>";
			print "<tr>";
			print "<th>nota 1</th>";
			print "<th>nota 2</th>";
			print "<th>nota 3</th>";
			print "<th>nota 4</th>";
			print "<th>Prova final</th>";
			print "</tr>";
			while($row = $queryHistorico_boletins->fetch_object()){
				print "<tr>";
				print "<td>".$row->nota1Bim."</td>";
				print "<td>".$row->nota4Bim."</td>";
				print "<td>".$row->nota3Bim."</td>";
				print "<td>".$row->nota4Bim."</td>";
				print "<td>".$row->provaFinal."</td>";
				print "</tr>";

			}
			print "</table>";
		} else{
			echo "<p>Sem notas cadastradas</p>";
		}
	}
	
	$mysqli->close();
?>