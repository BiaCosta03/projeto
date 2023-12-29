<?php
include_once('conexao.php');
    $sql = "SELECT * FROM professores WHERE idProfessores=".$_REQUEST['idProfessores'];
	$res = $mysqli->query($sql);
	$row = $res->fetch_object();
    
?>
<div class="row">
    <div class="col-12">
        <h1>Dados Pessoais</h1>  
        <input type="hidden" name="idProfessores" value="<?php print $row->idProfessores; ?>">
        <?php
        print_r('Nome: ' .$row->nome);
        print_r('<br>');
        print_r('Matrícula: ' .$row->matrícula);
        print_r('<br>');
        print_r('Cpf: ' .$row->cpf);
        print_r('<br>');
        print_r('Telefone: ' .$row->telefone);
        ?>
</div>