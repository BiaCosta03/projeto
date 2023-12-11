<?php
    session_start();//iniciando a sessão
    
    include_once('class/mensagem.php');
    include_once('class/disciplina.php');
    
    $d = new disciplina;
    $m = new mensagem;
    
    $m->getMensagem();//será exibida uma mensagem somente se houver alguma
    
?>


<?php
    session_start();//iniciando a sessão
    
    include_once('class/Mensagem.php');
    include_once('class/boletim.php');
    
    $m = new Mensagem;
    $b = new Boletim;
    
    $m->getMensagem();//exibindo a mensagem somente se existir
    
?>