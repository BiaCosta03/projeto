<?php
	switch ($_REQUEST ['acao']) {
		case 'cadastrar':
			$sql = "INSERT INTO professores (
					idProfessores,
					nome,
                    matrícula,
					senha,
					cpf,
					telefone                                                                                                            
					)VALUES(
						'".$_POST["idProfessores"]."',
						'".$_POST["nome"]."',
                        '".$_POST["matrícula"]."',
						'".$_POST["senha"]."',
						'".$_POST["cpf"]."',
						'".$_POST["telefone"]."'
					)";

			$res = $mysqli->query($sql);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='?page=listarProfessores';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=listarProfessores';</script>";
			}
			break;
		
		case 'editar':
			$sql = "UPDATE professores SET
						nome='".$_POST['nome']."',
                        matrícula='".$_POST['matrícula']."',
						senha='".$_POST['senha']."',
						cpf='".$_POST['cpf']."',
						telefone='".$_POST['telefone']."'
					WHERE
						idProfessores=".$_POST['idProfessores'];

			$res = $mysqli->query($sql);

			if($res==true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='?page=listarProfessores';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=listarProfessores';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM professores WHERE idProfessores=".$_REQUEST['idProfessores'];

			$res = $mysqli->query($sql);

			if($res==true){

				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='?page=listarProfessoress';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=listarProfessoress';</script>";
			}
			break;
		}