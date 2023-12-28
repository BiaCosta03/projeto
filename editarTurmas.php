<?php
     include_once('conexao.php');
    $sql = "SELECT * FROM turmas WHERE idTurmas=".$_REQUEST['idTurmas'];
	$res = $mysqli->query($sql);
	$row = $res->fetch_object();
   
?>
<div class="row">
    <div class="col-12">
        <h1>Editar Turma</h1>
        <form action="?page=salvarTurmas" method="POST"> 
        <input type="hidden" name="acao" value="editar">   
        <input type="hidden" name="idTurmas" value="<?php print $row->idTurmas; ?>">
            <tr>
                <td><label for="nome">Nome</td>
                <td><input value="<?php print $row->nome ?>" name="nome" required type="text" id="nome" class="form-control" placeholder="Nome"></td>
</tr>
<tr>
                <td><label for="Turnos_idTurnos">Código do turno</td>
                <td><input value="<?php print $row->Turnos_idTurnos;?>" name="Turnos_idTurnos" required type="varchar" id="Turnos_idTurnos" class="form-control" placeholder="Código"></td>
</tr>
            <div class="mb-3">
		    <button type="hidden" class="btn btn-success">Editar</button>
	        </div>
        </form>
    </div> 
</div>

