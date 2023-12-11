<h1>Editar Aluno</h1>
<?php
	$sql_1 = "SELECT * FROM alunos WHERE idMatricula=".$_REQUEST ['idMatricula'];
	$res_1 = $conn->query($sql_1);
	$row_1 = $res_1->fetch_object();
?>
<form action="?page=salvarAluno" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="idMatricula" value="<?php print $row_1->idMatricula; ?>">
	<div class="mb-3">
		<label>Nome do aluno</label>
		<input type="text" name="nome" value="<?php print $row_1->nome; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>cpf</label>
		<input type="text" name="cpf" value="<?php print $row_1->cpf; ?>"  class="form-control">
	</div>
	<div class="mb-3">
		<label>telefone</label>
		<input type="text" name="tel" value="<?php print $row_1->tefefone; ?>"  class="form-control">
	</div>
	<div class="mb-3">
		<label>Data de Nascimento</label>
		<input type="text" name="data" value="<?php print $row_1->data_nascimento; ?>"  class="form-control">
	</div>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>