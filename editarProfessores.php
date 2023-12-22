<?php
     include_once('conexao.php');
    $sql = "SELECT * FROM professores WHERE idProfessores=".$_REQUEST['idProfessores'];
	$res = $mysqli->query($sql);
	$row = $res->fetch_object();
   
?>
<div class="row">
    <div class="col-12">
        <h1>Editar estudante</h1>
        <form action="?page=salvarProfessores" method="POST"> 
        <input type="hidden" name="acao" value="editar">   
        <input type="hidden" name="idProfessores" value="<?php print $row->idProfessores; ?>">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input value="<?php print $row->nome ?>" name="nome" required type="text" id="nome" class="form-control" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="matrícula">Matrícula</label>
                <input value="<?php print $row->matrícula ?>" name="matrícula" required type="varchar" class="form-control" placeholder="matrícula">
            </div>
            <div class="form-group">
                <label for="grupo">Senha</label>
                <input value="<?php print $row->senha ?>" name="senha" required type="text" id="senha" class="form-control" placeholder="senha">
            </div>
			<div class="form-group">
                <label for="cpf">cpf</label>
                <input value="<?php print $row->cpf ?>" name="cpf" required type="varchar" id="cpf" class="form-control" placeholder="cpf">
            </div>
			<div class="form-group">
                <label for="telefone">Telefone</label>
                <input value="<?php print $row->telefone ?>" name="telefone" required type="tel" id="telefone" class="form-control" placeholder="Telefone">
            </div>
            <div class="mb-3">
		    <button type="hidden" class="btn btn-success">Editar</button>
	        </div>
        </form>
    </div> 
</div>
