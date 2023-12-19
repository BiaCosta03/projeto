<?php
	switch ($_REQUEST['acao']) {
		case 'cadastrar':
			$sql = "INSERT INTO professores (
					idProfessores,
					nome,
					senha,
					cpf,
					telefone,                                                                                                            
					)VALUES(
						'".$_POST["idProfessores"]."',
						'".$_POST["nome"]."',
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
			$sql = "UPDATE aluno SET
						nome='".$_POST['nome']."',
						senha='".$_POST['senha']."',
						cpf='".$_POST['cpf']."',
						telefone='".$_POST['telefone']."'
					WHERE
						idAluno=".$_POST['idProfessores'];

			$res = $conn->query($sql);

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

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='?page=listarProfessores';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=listarProfessores';</script>";
			}
			break;
	}
