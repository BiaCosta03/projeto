<?php 
if (isset($_POST['enviar'])){
$nome = $_POST['nome'];
$site = $_POST['site'];
$avisos = $_POST['avisos'];

$insert = mysql_query("INSERT INTO recados (nome, site, avisos) VALUES('$nome', '$site', '$avisos')");

}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mural de Avisos</title>
</head>
<body>
<h1> Mural de avisos </h1>
<div class="mural">
    <form action="" method="post">
        <span>Nome:</span><input name="nome" type="text" size="30"/><br/>
        <span>Site:</span><input name="site" type="text" size="30"/><br/>
        <span>Avisos:</span><textarea  name="avisos" cols="30" rows="5"></textarea><br/>
        <input type="submit" name="enviar" value="Enviar Aviso" class="btn"/>
</form>
</div>
<?php 
$select = mysql_query("SELECT * FROM recados");
while ($result = mysql_fetch_array($select)){
    $pessoa = $result['$nome'];
    $st = $result['$site'];
    $avs = $result['avisos'];


?>
<div class="recados">
    <h3><?php echo $pessoa;?> </h3><strong> Publicou:</strong>

    <p><?php echo $avs;?>   </p>

</div>
<?php }?>
</body>
</html>