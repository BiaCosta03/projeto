<?php
	switch ($_REQUEST ['acao']) {
		case 'cadastrar':
			$sql = "INSERT INTO mat_alunos_turmas (
	
					Aluno_idAluno,
                    Turmas_idTurmas                                                                                                           
					)VALUES(
						
						'".$_POST["Aluno_idAluno"]."',
						'".$_POST["Turmas_idTurmas"]."'
					)";

			$res = $mysqli->query($sql);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='?page=listarmatAlunos';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=listarmatAlunos';</script>";
			}
			break;
		
		case 'editar':
			$sql = "UPDATE mat_alunos_turmas SET
						Aluno_idAluno='".$_POST['Aluno_idAluno']."',
                        Turmas_idTurmas='".$_POST['Turmas_idTurmas']."'
					WHERE
						idMat_Alunos_turmas=".$_POST['idMat_Alunos_Turmas'];

			$res = $mysqli->query($sql);

			if($res==true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='?page=listarmatAlunos';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=listarmatAlunos';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM mat_alunos_turmas WHERE idMat_Alunos_turmas=".$_REQUEST['idMat_Alunos_Turmas'];

			$res = $mysqli->query($sql);

			if($res==true){

				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='?page=listarmatAlunos';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=listarmatAlunos';</script>";
			}
			break;
		}