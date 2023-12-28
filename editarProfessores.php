<?php
     include_once('conexao.php');
    $sql = "SELECT * FROM professores WHERE idProfessores=".$_REQUEST['idProfessores'];
	$res = $mysqli->query($sql);
	$row = $res->fetch_object();
   
?>
<div class="row">
    <div class="col-12">
        <h1>Editar Professores</h1>
        <form action="?page=salvarProfessores" method="POST"> 
        <input type="hidden" name="acao" value="editar">   
        <input type="hidden" name="idProfessores" value="<?php print $row->idProfessores; ?>">
            <tr>
                <td><label for="nome">Nome</td>
                <td><input value="<?php print $row->nome ?>" name="nome" required type="text" id="nome" class="form-control" placeholder="Nome"></td>
</tr>
            <tr>
                <td><label for="matrícula">Matrícula</td>
                <td><input value="<?php print $row->matrícula ?>" name="matrícula" required type="varchar" class="form-control" placeholder="matrícula"></td>
</tr>
            <tr>
                <td><label for="grupo">Senha</td>
                <td><input value="<?php print $row->senha ?>" name="senha" required type="text" id="senha" class="form-control" placeholder="senha"></td>
</tr>
			<tr>
                <td><label for="cpf">cpf</td>
                <td><input value="<?php print $row->cpf ?>" name="cpf" required type="varchar" id="cpf" class="form-control" placeholder="cpf"></td>
</tr>
			<tr>
                <td><label for="telefone">Telefone</td>
                <td><input value="<?php print $row->telefone ?>" name="telefone" required type="tel" id="telefone" class="form-control" placeholder="Telefone"></td>
</tr>
            <div class="mb-3">
		    <button type="hidden" class="btn btn-success">Editar</button>
	        </div>
        </form>
    </div> 
</div>
