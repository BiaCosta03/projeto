<?php
     include_once('conexao.php');
    $sql = "SELECT * FROM disciplinas WHERE idDisciplinas=".$_REQUEST['idDisciplinas'];
	$res = $mysqli->query($sql);
	$row = $res->fetch_object();
   
?>
<div class="row">
    <div class="col-12">
        <h1>Editar Disciplinas</h1>
        <form action="?page=salvarDisciplinas" method="POST"> 
        <input type="hidden" name="acao" value="editar">   
        <input type="hidden" name="idDisciplinas" value="<?php print $row->idDisciplinas; ?>">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input value="<?php print $row->nome ?>" name="nome" required type="text" id="nome" class="form-control" placeholder="Nome">
            </div>
            <div class="mb-3">
		    <button type="hidden" class="btn btn-success">Editar</button>
	        </div>
        </form>
    </div> 
</div>
