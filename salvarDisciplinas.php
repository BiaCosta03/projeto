<?php
	switch ($_REQUEST ['acao']) {
		case 'cadastrar':
			$sql = "INSERT INTO disciplinas (
					idDisciplinas,
					nome                                                                                                             
					)VALUES(
						'".$_POST["idDisciplinas"]."',
						'".$_POST["nome"]."'
					)";

			$res = $mysqli->query($sql);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='?page=listarDisciplinas';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=listarDisciplinas';</script>";
			}
			break;
		
		case 'editar':
			$sql = "UPDATE turnos SET
						nome='".$_POST['nome']."'
					WHERE
						idDisciplinas=".$_POST['idDisciplinas'];

			$res = $mysqli->query($sql);

			if($res==true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='?page=listarDisciplinas';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=listarDisciplinas';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM disciplinas WHERE idDisciplinas=".$_REQUEST['idDisciplinas'];

			$res = $mysqli->query($sql);

			if($res==true){

				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='?page=listarDisciplinas';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=listarDisciplinas';</script>";
			}
			break;
		}