<?php
	if(isset($_SESSION['mensagem'])){
		echo $_SESSION['mensagem'];
		unset($_SESSION['mensagem']);
	}
    
?>
<h1>Listar Alunos</h1>
<?php
	$sql = "SELECT * FROM aluno AS aluno
			INNER JOIN categoria AS categorias
			ON categorias.Cod_Categoria = ma.idCategoria";

	$res = $conn->query($sql);
	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Matrícula</th>";
		print "<th>nome</th>";
		print "<th>senha</th>";
		print "<th>cpf</th>";
		print "<th>telefone</th>";
		print "<th>Data de Nascimento</th>";
        print "<th>Categoria</th>";
		print "<th>Turma</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->idMatrícula."</td>";
			print "<td>".$row->nome."</td>";
			print "<td>".$row->semha."</td>";
			print "<td>".$row->cpf."</td>";
			print "<td>".$row->telefone."</td>";
			print "<td>".$row->data_nascimento."</td>";
            print "<td>".$row->Cod_Categoria."</td>";
			print "<td>".$row->Cod_Turma."</td>";
			print "<td>
					  <button onclick=\"location.href='?page=editarAluno&idMatrícula=".$row->idMatricula."';\" class='btn btn-primary'>Editar</button>

					  <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvarAluno&acao=excluir&idMatricula=".$row->idMatricula."';}else{false;}\"  class='btn btn-danger'>Excluir</button>
			       </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultado";
	}

