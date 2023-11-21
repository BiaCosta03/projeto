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

$mysqli = new mysqli($hostname, $bancodedados, $professor,$adm, $aluno, $boletim, $categoria, 
$disciplina, $mat_aluno_turmas, $mat_professor_turmas, $turmas, $turno);
if($mysqli->connect_errno){
    echo"Falha ao conectar:(".$mysqli->connect_errno. ")" . $mysqli->connect_errno;
}
else
echo"conectando ao banco de dados";
?>