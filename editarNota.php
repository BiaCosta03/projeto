<?php
include_once('conexao.php');
    $sql = "SELECT * FROM historico_boletins WHERE idHistorico_Boletins=".$_REQUEST['idHistorico_Boletins'];
	$res = $mysqli->query($sql);
	$row = $res->fetch_object();
    
?>
<div class="row">
    <div class="col-12">
        <h1>Editar notas</h1>
        <form action="?page=salvarnotas" method="POST"> 
        <input type="hidden" name="acao" value="editar">   
        <input type="hidden" name="idHistorico_boletins" value="<?php print $row->idHistorico_Boletins; ?>">
        <tr>
                <td><label for="nota1Bim">Nota 1:</td>
                <td><input value="<?php print $row->nota1Bim; ?>" class="form-control" type="text" name="nota1Bim"></td>
            </tr>

            <tr>
                <td><label for="nota2Bim">Nota 2:</td>
                <td><input value="<?php print $row->nota2Bim; ?>" class="form-control" type="text" name="nota2Bim"></td>
            </tr>

            <tr>
                <td><label for="nota3Bim">Nota 3:</td>
                <td><input value="<?php print $row->nota3Bim; ?>" class="form-control" type="text" name="nota3Bim"></td>
            </tr>

            <tr>
                <td><label for="nota4Bim">Nota 4:</td>
                <td><input value="<?php print $row->nota4Bim; ?>" class="form-control" type="text" name="nota4Bim"></td>
            </tr>

            <tr>
                <td><label for="provaFinal">Prova Final:</td>
                <td><input value="<?php print $row->provaFinal; ?>" class="form-control" type="text" name="provaFinal"></td>
    </tr>

    <tr>
                <td><label for="mediaFinal">Média Final:</td>
                <td><input value="<?php print $row->mediaFinal; ?>" class="form-control" type="text" name="mediaFinal"></td>
    </tr>
    <tr>
                <td><label for="resultado">resultado:</td>
                <td><input value="<?php print $row->resultado; ?>" class="form-control" type="text" name="resultado"></td>
    </tr>
    <div class="mb-3">
		    <button type="hidden" class="btn btn-success">Editar</button>
	        </div>
        </form>
    </div> 
</div>

