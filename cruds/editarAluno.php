<h1>Editar Aluno</h1>
<?php
	$sql_1 = "SELECT * FROM alunos WHERE idMatricula=".$_REQUEST['idMatricula'];
	$res_1 = $mysqli->query($sql_1);
	$row_1 = $res_1->fetch_object();
?>
<form action="?page=salvarAluno" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="idMatricula" value="<?php print $row_1->idMatricula; ?>">
	<div class="mb-3">
		<label>Editar Turma</label>
		<select name="Cod_Turmas" class="form-control">
			<option>- Escolha -</option>
			<?php
				$sql = "SELECT * FROM turmas";
				$res = $conn->query($sql);
				if($res->num_rows > 0){
					while($row = $res->fetch_object()){
						if($row_1->Cod_Turmas == $row->idTurmas){
							print "<option value='".$row->idTurmas."' selected>".$row->nome."</option>";
						}else{
							print "<option value='".$row->idTurmas."'>".$row->nome."</option>";
						}
					}
				}else{
					print "<option>Não há turmas cadastradas</option>";
				}
			?>
		</select>
	</div>
	<div class="mb-3">
		<label>Aluno</label>
		<input type="text" name="nome" value="<?php print $row_1->nome; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>cpf</label>
		<input type="text" name="cpf" value="<?php print $row_1->cor_modelo; ?>"  class="form-control">
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