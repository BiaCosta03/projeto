<?php

    include_once('conexao.php');

    $botao = '';
    $msg = '';
    $nota1Bim = '';
    $nota2Bim = '';
    $nota3Bim = '';
    $nota4Bim = '';
    $provaFinal = '';
    $mediaFinal = '';
    $Mat_Alunos_Turmas_idMat_Alunos_Turmas = '';
    $Turma_Disc_Professor_idTurma_Disc_Professor = '';
    $resultado='';
    

    if(isset($_POST["enviar"])){
        $botao = $_POST["enviar"];

        if(isset($_POST["nota1Bim"])){
            $nota1Bim = $_POST["nota1Bim"];
        }

        if(isset($_POST["nota2Bim"])){
            $nota2Bim = $_POST["nota2Bim"];
        }

        if(isset($_POST["nota3Bim"])){
            $nota3Bim = $_POST["nota3Bim"];
        }

        if(isset($_POST["nota4Bim"])){
            $nota4Bim = $_POST["nota4Bim"];
        }

        if(isset($_POST["provaFinal"])){
            $provaFinal = $_POST["provaFinal"];
        }

        if(isset($_POST["Mat_Alunos_Turmas_idMat_Alunos_Turmas"])){
            $Mat_Alunos_Turmas_idMat_Alunos_Turmas = $_POST["Mat_Alunos_Turmas_idMat_Alunos_Turmas"];
        }

        if(isset($_POST["Turma_Disc_Professor_idTurma_Disc_Professor "])){
            $Turma_Disc_Professor_idTurma_Disc_Professor  = $_POST["Turma_Disc_Professor_idTurma_Disc_Professor "];
        }


        $mediaFinal = ($nota1Bim + $nota2Bim
            + $nota3Bim + $nota4Bim)/4 + $provaFinal ;

        $msg = "O valor da média é " . $mediaFinal;
        $resultado = "  " . $resultado;

        if($mediaFinal >= 60 ){ // SE FOR MAIOR QUE 60, APROVADO.
            $resultado = "Aprovado";
    
        } else if(// MENOR QUE 60, REPROVADO.
            $mediaFinal <= 60){
            $resultado = "Reprovado";
            
        }

    }

?>
<?php

	$sql = "SELECT * FROM historico_boletins";
	$res = $mysqli->query($sql);
	$qtd = $res->num_rows;
	
	
?>
<style>
        .box-search{
            display: flex;
            justify-content: center;
            gap: .1%;
        }
    </style>
	
	<div class="row">
        <div class="col-12">
            <h1>Notas:</h1>
        </div>
		<br>
   
        </button>
    </div>
</body>
		<?php
        if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s).</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>Código</th>";
		print "<th>Nota 1</th>";
		print "<th>Nota 2</th>";
		print "<th>Nota 3</th>";
		print "<th>Nota 4</th>";
		print "<th>Prova Final</th>";
		print "<th>Média Final</th>";
		print "<th>Resultado</th>";
		print "<th>Matrícula do aluno</th>";
		print "<th>Matrícula do professor</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->idHistorico_Boletins."</td>";
			print "<td>".$row->nota1Bim."</td>";
			print "<td>".$row->nota2Bim."</td>";
			print "<td>".$row->nota3Bim."</td>";
			print "<td>".$row->nota4Bim."</td>";
			print "<td>".$row->provaFinal."</td>";
			print "<td>".$row->mediaFinal."</td>";
			echo "<td>".$row->resultado."</td>";
			print "<td>".$row->Mat_Alunos_Turmas_idMat_Alunos_Turmas."</td>";
			print "<td>".$row->Turma_Disc_Professor_idTurma_Disc_Professor ."</td>";
			print "<td>
					 <button onclick=\"location.href='?page=editarNotas&idHistorico_Boletins=".$row->idHistorico_Boletins."';\" class='btn btn-primary'>Editar</button>

					 <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvarnotas&acao=excluir&idHistorico_Boletins=".$row->idHistorico_Boletins."';}else{false;}\"  class='btn btn-danger'>Excluir</button>
			       </td>";
			
		}
		print "</table>";
	}