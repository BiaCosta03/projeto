<?php
	switch ($_REQUEST ['acao']) {
		case 'cadastrar':
			$sql = "INSERT INTO turma_disc_professor (
					Turmas_idTurmas,
					Disciplinas_idDisciplinas,
                    Professores_idProfessores
					

					)VALUES(
						'".$_POST["Turmas_idTurmas"]."',
						'".$_POST["Disciplinas_idDisciplinas"]."',
                        '".$_POST["Professores_idProfessores"]."'
						
					)";

			$res = $mysqli->query($sql);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='?page=listarmatProfessores';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=listarmatProfessores';</script>";
			}
			break;
		
		case 'editar':
			$sql = "UPDATE turma_disc_professor SET
						Turmas_idTurmas='".$_POST['Turmas_idTurmas']."',
                        Disciplinas_idDisciplinas='".$_POST['Disciplinas_idDisciplinas']."',
                        Professores_idProfessores='".$_POST['Professores_idProfessores']."'
					WHERE
						idTurma_disc_Professor=".$_POST['idTurma_Disc_Professor'];

			$res = $mysqli->query($sql);

			if($res==true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='?page=listarmatProfessores';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=listarmatProfessores';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM turma_disc_professor WHERE idTurma_Disc_Professor=".$_REQUEST['idTurma_Disc_Professor'];

			$res = $mysqli->query($sql);

			if($res==true){

				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='?page=listarmatProfessores';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=listarmatProfessores';</script>";
			}
			break;
		}