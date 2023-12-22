<?php
     include_once('conexao.php');
    $sql = "SELECT * FROM aluno WHERE idAluno=".$_REQUEST['idAluno'];
	$res = $mysqli->query($sql);
	$row = $res->fetch_object();
   
?>
<div class="row">
    <div class="col-12">
        <h1>Editar estudante</h1>
        <form action="?page=salvarAluno" method="POST">
        <input type="hidden" name="acao" value="editar"> 
        <input type="hidden" name="idAluno" value="<?php echo $row->idAluno; ?>">   
            <div class="form-group">
                <label for="nome">Nome</label>
                <input value="<?php echo $row->nome ?>" name="nome" required type="text" id="nome" class="form-control" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="grupo">Senha</label>
                <input value="<?php echo $row->senha ?>" name="senha" required type="text" id="senha" class="form-control" placeholder="senha">
            </div>
			<div class="form-group">
                <label for="cpf">cpf</label>
                <input value="<?php echo $row->cpf ?>" name="cpf" required type="varchar" id="cpf" class="form-control" placeholder="cpf">
            </div>
			<div class="form-group">
                <label for="telefone">Telefone</label>
                <input value="<?php echo $row->telefone ?>" name="telefone" required type="tel" id="telefone" class="form-control" placeholder="Telefone">
            </div>
			<div class="form-group">
                <label for="data_nascimento">Data de Nascimento</label>
                <input value="<?php echo $row->data_nascimento ?>" name="data_nascimento" required type="date" id="data_nascimento" class="form-control" placeholder="date">
            </div>
            <input type="hidden" name="id" value=<?php echo $idAluno;?>>
                <input type="submit" name="Editar" id="submit">
        </form>
    </div>
</div>
