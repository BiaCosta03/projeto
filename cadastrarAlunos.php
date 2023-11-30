<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatiple" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet'  type='text/css'  href='estilo.css'>
    <title>Cadastro</title>
</head>
<body>
    <form action="?page=marca-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
    <h1>Cadastro</h1>

<p>
        <label for="">Matricula:</label>
        <input type="int" name="idMatricula">
        </p>

        <p>
        <label for="">Nome e Sobrenome:</label>
        <input type="text" name="name">
        </p>

        <p>
        <label for="">Senha:</label>
        <input type="text" name="ns" maxlength="16">
        </p>

        <p>
        <label for="">CPF:</label>
        <input type="varchar" name="cpf" maxlength="15" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}">
        <small>Formato: 999.999.999-99</small>
        </p>

        <p>
        <label for="telefone">Telefone:</label>
        <input type="tel" name="telefone" pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}">
        <small>Formato: 11-9999-9999</small>
        </p>

        <p>
        <label for="">Data de nascimento:</label>
        <input type="date" name="date" value="1990-01-01">
        </p>

        <p>
        <label for="">Categoria:</label>
        <select name="Cod_Categoria" input type="int">
			<option>- Escolha -</option>
			<?php
				$sql = "SELECT * FROM Categoria";
				$res = $conn->query($sql);
				if($res->num_rows > 0){
					while($row = $res->fetch_object()){
						print "<option value='".$row->idCategoria."'>".$row->nome."</option>";
					}
				}else{
					print "<option>Não há categorias cadastradas</option>";
				}
			?>
		</select>
        </p>
        <p>
        <label for="">Adicione em uma turma:</label>
        <select name="Cod_Turmas" input type="int">
			<option>- Escolha -</option>
			<?php
				$sql = "SELECT * FROM Turmas";
				$res = $conn->query($sql);
				if($res->num_rows > 0){
					while($row = $res->fetch_object()){
						print "<option value='".$row->idTurmas."'>".$row->nome."</option>";
					}
				}else{
					print "<option>Não há turmas cadastradas</option>";
				}
			?>
		</select>
        </p>


        <p class="Cadastro">
            <button type="submit" name="Cadastrar" value="Enviar">Cadastrar</button>
         </p>

    </form>

    
</body>
</html>