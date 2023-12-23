<?php
	switch ($_REQUEST ['acao']) {
		case 'cadastrar':
			$sql = "INSERT INTO mat_alunos_turmas (
					idMat_Aluno_Turmas,
					Aluno_idAluno,
                    Turmas_idTurmas                                                                                                            
					)VALUES(
						'".$_POST["idMat_Alunos_Turmas"]."',
						'".$_POST["Aluno_idAluno"]."',
                        '".$_POST["Turmas_idTurmas"]."'
					)";

			$res = $mysqli->query($sql);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='?page=listarAlunosMatric';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=listarAlunosMatric';</script>";
			}
			break;
		
		case 'editar':
			$sql = "UPDATE mat_alunos_turmas SET
						Aluno_idAluno='".$_POST['Aluno_idAluno']."',
                        Turmas_idTurmas='".$_POST['Turmas_idTurmas']."'
					WHERE
						idMat_Aluno_Turmas=".$_POST['idMat_Alunos_Turmas'];

			$res = $mysqli->query($sql);

			if($res==true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='?page=listarAlunosMatric';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=listarAlunosMatric';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM mat_Aluno_Turmas WHERE idMat_Aluno_Turmas=".$_REQUEST['idMat_Aluno_Turmas'];

			$res = $mysqli->query($sql);

			if($res==true){

				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='?page=listarAlunosMatric';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=listarAlunosMatrc';</script>";
			}
			break;
		}