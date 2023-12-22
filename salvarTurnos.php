<?php
	switch ($_REQUEST['acao']) {
		case 'cadastrar':
			$sql = "INSERT INTO turnos (
					idTurnos,
					nome,                                                                                                        
					)VALUES(
						".$_POST["idTurnos"].",
						'".$_POST["nome"]."'
					)";

			$res = $mysqli->query($sql);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='?page=listarTurnos';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=listarTurnos';</script>";
			}
			break;
		
		case 'editar':
			$sql = "UPDATE turnos SET
						nome='".$_POST['nome']."',
					WHERE
						idTurnos=".$_POST['idTurnos'];

			$res = $mysqli->query($sql);

			if($res==true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='?page=listarTurnos';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=listarTurnos';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM turnos WHERE idTurnos=".$_REQUEST['idTurnos'];

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='?page=listarTurnos';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=listarTurnos';</script>";
			}
			break;
	}
