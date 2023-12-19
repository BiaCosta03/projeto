<?php
	switch ($_REQUEST['acao']) {
		case 'cadastrar':
			$sql = "INSERT INTO Turmas (
					idTurmas,
					nome,
					turno,
					vagas,
					alunosMatriculados                                                                                                            
					)VALUES(
						".$_POST["idTurmas"].",
						'".$_POST["nome"]."',
						'".$_POST["turno"]."',
						'".$_POST["vagas"]."',
						'".$_POST["alunosMatriculados"]."'
					)";

			$res = $mysqli->query($sql);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='?page=listarTurmas';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=listarTurmas';</script>";
			}
			break;
		
		case 'editar':
			$sql = "UPDATE modelo SET
						nome='".$_POST['nome']."',
                        turno='".$_POST['turno']."',
						vagas='".$_POST['vagas']."',
						alunosMatriculados='".$_POST['AlunosMatriculados']."'
					WHERE
						idTurmas=".$_POST['idTurmas'];

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='?page=listarTurmas';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=listarTurmas';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM turmas WHERE idTurmas=".$_REQUEST['idTurmas'];

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='?page=listarTurmas';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=listarTurmas';</script>";
			}
			break;
	}
