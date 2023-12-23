<?php
	switch ($_REQUEST ['acao']) {
		case 'cadastrar':
			$sql = "INSERT INTO turmas (
					idTurmas,
					nome,
					Turnos_idTurnos	                                                                                                             
					)VALUES(
						'".$_POST["idTurmas"]."',
						'".$_POST["nome"]."',
						'".$_POST["Turnos_idTurnos"]."'
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
			$sql = "UPDATE turmas SET
						nome='".$_POST['nome']."',
						TurnosidTurnos='".$_POST['Turnos_idTurnos']."'
					WHERE
						idTurmas=".$_POST['idTurmas'];

			$res = $mysqli->query($sql);

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

			$res = $mysqli->query($sql);

			if($res==true){

				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='?page=listarTurmas';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=listarTurmas';</script>";
			}
			break;
		}