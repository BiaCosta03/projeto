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
    <form action="?page=salvarAlunos" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
    <h1>Cadastro</h1>

        <p>
        <label>Matricula:</label>
        <input type="int" name="idMatricula">
        </p>

        <p>
        <label>Nome e Sobrenome:</label>
        <input type="text" name="name">
        </p>

        <p>
        <label>Senha:</label>
        <input type="text" name="ns" maxlength="16">
        </p>

        <p>
        <label>CPF:</label>
        <input type="varchar" name="cpf" maxlength="15" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}">
        <small>Formato: 999.999.999-99</small>
        </p>

        <p>
        <label for="telefone">Telefone:</label>
        <input type="tel" name="telefone" pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}">
        <small>Formato: 11-9999-9999</small>
        </p>

        <p>
        <label>Data de nascimento:</label>
        <input type="date" name="date" value="1990-01-01">
        </p>

        <p>
        <label>Categoria:</label>
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

        <div class="mb-3">
		<button type="submit" class="btn btn-success">Cadastrar</button>
	    </div>

    </form>

    
</body>
</html>