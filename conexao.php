<?php
$hostname = "localhost";
$bancodedados = "sistemaacademico";
$professor = "";
$adm = "";
$aluno = "";
$boletim = "";
$categoria = "";
$disciplina = "";
$mat_aluno_turmas = "";
$mat_professor_turmas = "";
$turmas = "";
$turno = "";

$sistemaacademico = new sistemaacademico($hostname, $bancodedados, $professor,$adm, $aluno, $boletim, $categoria, 
$disciplina, $mat_aluno_turmas, $mat_professor_turmas, $turmas, $turno);
if($sistemaacademico->connect_errno){
    echo"Falha ao conectar:(".$sistemaacademico->connect_errno. ")" . $sistemaacademico->connect_errno;
}
else
echo"conectando ao banco de dados";
?>