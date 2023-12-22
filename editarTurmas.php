<?php
     include_once('conexao.php');
    $sql = "SELECT * FROM turmas WHERE idTurmas=".$_REQUEST['idTurmas'];
	$res = $mysqli->query($sql);
	$row = $res->fetch_object();
   
?>
<div class="row">
    <div class="col-12">
        <h1>Editar estudante</h1>
        <form action="?page=salvarTurmas" method="POST"> 
        <input type="hidden" name="acao" value="editar">   
        <input type="hidden" name="idTurmas" value="<?php print $row->idTurmass; ?>">
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

