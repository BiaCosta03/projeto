<?php
	switch ($_REQUEST['acao']) {
		case 'cadastrar':
			$sql = "INSERT INTO aluno (
					idMatricula,
					nome,
					senha,
					cpf,
					telefone,
					data_nascimento                                                                                                              
					)VALUES(
						".$_POST["idMatricula"].",
						'".$_POST["nome"]."',
						'".$_POST["senha"]."',
						'".$_POST["cpf"]."',
						'".$_POST["telefone"]."',
                        '".$_POST["data_nascimento"]."'
					)";

			$res = $mysqli->query($sql);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='?page=listarAlunos';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=listarAlunos';</script>";
			}
			break;
		
		case 'editar':
			$sql = "UPDATE modelo SET
						nome='".$_POST['nome']."',
						senha='".$_POST['senha']."',
						cpf='".$_POST['cpf']."',
						telefone='".$_POST['telefone']."',
                        data_nascimento='".$_POST['data_nascimento']."'
					WHERE
						idMatricula=".$_POST['idMatricula'];

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='?page=listarAluno';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=listarAluno';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM aluno WHERE idMaticula=".$_REQUEST['idMatricula'];

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='?page=listarAlunos';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=listarAlunos';</script>";
			}
			break;
	}