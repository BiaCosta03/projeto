<?php
	$sql = "SELECT * FROM aluno";
	$res = $conn->query($sql);
	$qtd = $res->num_rows;

?>
    <div class="row">
        <div class="col-12">
            <h1>Lista de estudantes</h1>
            <a href="cadastrarAlunos.php" class="btn btn-info my-2">Novo</a>
        </div>
        <div class="col-12 table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Matrícula</th>
					<th>Turma</th>
                    <th>Notas</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($aluno as $aluno) { ?>
                    <tr>
                        <td><?php echo $aluno["nome"] ?></td>
						<td><?php echo $aluno["matricula"] ?></td>
						<td><?php echo $aluno["turma"] ?></td>
                        <td>
                            <a href="notasAlunos.php?id=<?php echo $aluno["idMatricula"] ?>" class="btn btn-info">
                                Notas
                            </a>
                        </td>
                        <td>
                            <a href="editarAlunos.php?id=<?php echo $aluno["idMatricula"]; ?>" class="btn btn-warning">
                                Editar
                            </a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
<?php

