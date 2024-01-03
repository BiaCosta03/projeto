<?php
	switch ($_REQUEST ['acao']) {
		case 'cadastrar':
			$sql = "INSERT INTO historico_boletins (
					idHistorico_Boletins,
					nota1Bim,
                    nota2Bim,
					nota3Bim,
					nota4Bim,
					provaFinal,
					mediaFinal,
					resultado,
					Mat_Alunos_Turmas_idMat_Alunos_Turmas,
					Turma_Disc_Professor_idTurma_Disc_Professor                                                                                                              
					)VALUES(
						'".$_POST["idHistorico_Boletins"]."',
						'".$_POST["nota1Bim"]."',
                        '".$_POST["nota2Bim"]."',
						'".$_POST["nota3Bim"]."',
						'".$_POST["nota4Bim"]."',
						'".$_POST["provaFinal"]."',
                        '".$_POST["mediaFinal"]."',
						'".$_POST["resultado"]."',
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
				$sql = "UPDATE historico_boletins SET
							nota1Bim='".$_POST['nota2Bim']."',
							nota3Bim='".$_POST['nota2Bim']."',
							nota3bim='".$_POST['nota3Bim']."',
							nota4Bim='".$_POST['nota4Bim']."',
							provaFinal='".$_POST['provaFinal']."',
							mediaFinal='".$_POST['mediaFinal']."',
							mediaFinal='".$_POST['resultado']."',
							Mat_Alunos_Turmas_idMat_Alunos_Turmas='".$_POST['Mat_Alunos_Turmas_idMat_Alunos_Turmas']."',
							Turma_Disc_Professor_idTurma_Disc_Professor='".$_POST['Turma_Disc_Professor_idTurma_Disc_Professor']."'
						WHERE
							idHistorico_Boletins=".$_POST['idHistorico_Boletins'];
	
				$res = $mysqli->query($sql);
	
				if($res==true){
					print "<script>alert('Editou com sucesso!');</script>";
					print "<script>location.href='?page=listarNota';</script>";
				}else{
					print "<script>alert('Não foi possível!');</script>";
					print "<script>location.href='?page=listarNota';</script>";
				}
				break;
	
			case 'excluir':
				$sql = "DELETE FROM historico_boletins WHERE idHistorico_Boletins=".$_REQUEST['idHistorico_Boletins'];
	
				$res = $mysqli->query($sql);
	
				if($res==true){
	
					print "<script>alert('Excluiu com sucesso!');</script>";
					print "<script>location.href='?page=listarNota';</script>";
				}else{
					print "<script>alert('Não foi possível!');</script>";
					print "<script>location.href='?page=listarNota';</script>";
				}
				break;
			}