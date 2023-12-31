<?php
	switch ($_REQUEST ['acao']) {
		case 'cadastrar':
			$sql = "INSERT INTO historico_boletins (
					idHistorico_Boletins ,
					nota1Bim,
                    nota2Bim,
					nota3Bim,
					nota4Bim,
					provaFinal,
					mediaFinal,
					Mat_Alunos_Turmas_idMat_Alunos_Turmas,
					Turma_Disc_Professor_idTurma_Disc_Professor                                                                                                              
					)VALUES(
						'".$_POST["idHistorico_Boletins"]."',
						'".$_POST["nota1Bim"]."',
                        '".$_POST["nota2Bim"]."',
						'".$_POST["nota3bIm"]."',
						'".$_POST["nota4Bim"]."',
						'".$_POST["provaFinal"]."',
                        '".$_POST["mediaFinal"]."',
                        '".$_POST["Mat_Alunos_Turmas_idMat_Alunos_Turmas"]."',
                        '".$_POST["Turma_Disc_Professor_idTurma_Disc_Professor"]."'
					)";

			$res = $mysqli->query($sql);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='?page=listarNota';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=listarNota';</script>";
			}
			break;
		
		case 'editar':
			$sql = "UPDATE aluno SET
						nome='".$_POST['nome']."',
                        matrícula='".$_POST['matrícula']."',
						senha='".$_POST['senha']."',
						cpf='".$_POST['cpf']."',
						telefone='".$_POST['telefone']."',
                        data_nascimento='".$_POST['data_nascimento']."'
					WHERE
						idAluno=".$_POST['idAluno'];

			$res = $mysqli->query($sql);

			if($res==true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='?page=listarAlunos';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=listarAlunos';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM aluno WHERE idAluno=".$_REQUEST['idAluno'];

			$res = $mysqli->query($sql);

			if($res==true){

				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='?page=listarAlunos';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=listarAlunos';</script>";
			}
			break;
		}


