<?php
include_once('conexao.php');
    $sql = "SELECT * FROM aluno WHERE idAluno=".$_REQUEST['idAluno'];
	$res = $mysqli->query($sql);
	$row = $res->fetch_object();
    
?>
<div class="row">
    <div class="col-12">
        <h1>Dados Pessoais</h1>  
        <input type="hidden" name="idAluno" value="<?php print $row->idAluno; ?>">
            <div>
                <label>Nome:</label>
                <input value="<?php print $row->nome ?>">
            </div>
            <div>
                <label>Matrícula:</label>
                <input value="<?php print $row->matrícula ?>">
            </div>
            <div>
                <label>Senha:</label>
                <input value="<?php print $row->senha ?>">
            </div>
            <div>
                <label>cpf:</label>
                <input value="<?php print $row->cpf ?>">
            </div>
			<div>
                <label>Telefone:</label>
                <input value="<?php print $row->telefone ?>">
            </div>
			<div>
                <label>Data de Nascimento:</label>
                <input value="<?php print $row->data_nascimento ?>">
            </div>
    </div> 
</div>
