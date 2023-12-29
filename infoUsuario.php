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
        <?php
        print_r('Nome: ' .$row->nome);
        print_r('<br>');
        print_r('Matrícula: ' .$row->matrícula);
        print_r('<br>');
        print_r('Cpf: ' .$row->cpf);
        print_r('<br>');
        print_r('Telefone: ' .$row->telefone);
        print_r('<br>');
        print_r('Data de nascimento: ' .$row->data_nascimento);
        ?>
</div>
