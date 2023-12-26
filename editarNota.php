<?php
include_once('conexao.php');
    $sql = "SELECT * FROM historico_Boletins WHERE idHistorico_boletins=".$_REQUEST['idHistorco_Boletins'];
	$res = $mysqli->query($sql);
	$row = $res->fetch_object();
    
?>
<div class="row">
    <div class="col-12">
        <h1>Editar nota</h1>
        <form action="?page=salvarNotas" method="POST"> 
        <input type="hidden" name="acao" value="editar">   
        <input type="hidden" name="idHistorico_boletins" value="<?php print $row->idHistorico_Boletins; ?>">
            <div class="form-group">
            <tr>
                <td><label for="nota1Bim">Nota 1Bimestre</td>
                <td><input value="<?php print $row->nota1Bim; ?>" name="nota1Bim" id="nota1Bim" required type="double" class="form-control" placeholder="Nota1"></td>
    </tr>
            <tr>
                <td><label for="nota2Bim">Nota 2Bimestre</td>
                <td><input value="<?php print $row->nota2Bim; ?>" name="nota2Bim" id="nota2bIM" required type="double" class="form-control" placeholder="Nota2"><td>
            </tr>
            <tr>
                <td for="nota3Bim">Nota 3Bimestre</td>
                <td><input value="<?php print $row->nota3Bim; ?>" name="nota3Bim" id="nota3Bim" required type="double" class="form-control" placeholder="Nota3"><td>
    </tr>
            <tr>
                <td><label for="nota4Bim">Nota 4Bimestre</td>
                <td><input value="<?php print $row->nota4Bim; ?>" name="nota4Bim" id="nota4Bim" required type="doubler" class="form-control" placeholder="Nota4"></td>
            </tr>
            <tr>
                <td><label for="provafinal">Prova Fnal</td>
                <td><input value="<?php print $row->provafinal; ?>" name="provafinal" id="provafinal" required type="double" class="form-control" placeholder="Prova final"></td>
            </tr>
            <tr>
                <td><label for="mediafinal">Média Final</td>
                <td><input value="<?php print $row->mediafinal; ?>" name="mediafinal" id="mediafinal" required type="double" class="form-control" placeholder="mediafinal"><td>
    </tr>
            <div class="mb-3">
		    <button type="hidden" class="btn btn-success">Editar</button>
	        </div>
        </form>
    </div> 
</div>