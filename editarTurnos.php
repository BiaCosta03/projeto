<?php
     include_once('conexao.php');
    $sql = "SELECT * FROM turnos WHERE idTurnos=".$_REQUEST['idTurnos'];
	$res = $mysqli->query($sql);
	$row = $res->fetch_object();
   
?>
<div class="row">
    <div class="col-12">
        <h1>Editar estudante</h1>
        <form action="?page=salvarTurnos" method="POST"> 
        <input type="hidden" name="acao" value="editar">   
        <input type="hidden" name="idTurnos" value="<?php print $row->idTurnos; ?>">
            <tr>
                <td><label for="nome">Nome</td>
                <td><input value="<?php print $row->nome ?>" name="nome" required type="text" id="nome" class="form-control" placeholder="Nome"></td>
</tr>
            <div class="mb-3">
		    <button type="hidden" class="btn btn-success">Editar</button>
	        </div>
        </form>
    </div> 
</div>
