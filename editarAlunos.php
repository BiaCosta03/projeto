<?php
	$sql = "SELECT * FROM aluno WHERE idMatricula=".$_REQUEST['idMatricula'];
	$res = $mysqli->query($sql);
	$row = $res->fetch_object();
?>
<div class="row">
    <div class="col-12">
        <h1>Editar estudante</h1>
        <form action="editarAlunos.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $_GET["idMatricula"] ?>">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input value="<?php echo $alunos->nome ?>" name="nome" required type="text" id="nome" class="form-control" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="grupo">Senha</label>
                <input value="<?php echo $alunos->senha ?>" name="senha" required type="text" id="senha" class="form-control" placeholder="senha">
            </div>
			<div class="form-group">
                <label for="cpf">cpf</label>
                <input value="<?php echo $alunos->cpf ?>" name="cpf" required type="varchar" id="cpf" class="form-control" placeholder="cpf">
            </div>
			<div class="form-group">
                <label for="telefone">Telefone</label>
                <input value="<?php echo $alunos->grupo ?>" name="telefone" required type="tel" id="telefone" class="form-control" placeholder="Telefone">
            </div>
			<div class="form-group">
                <label for="date">Data de Nascimento</label>
                <input value="<?php echo $alunos->grupo ?>" name="date" required type="date" id="date" class="form-control" placeholder="date">
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Guardar</button>
            </div>
        </form>
    </div>
</div>
