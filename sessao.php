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



<?php
            
            //mesmo esquema usado na inserção de um aluno
            if(isset($_POST['nome'])){
                $nome = $_POST['nome'];
                
                include_once('disciplinas_pasta/inserir_disciplinas.php');
                include_once('projeto/mensagem.php');
                
                $m = new Mensagem;
                $d = new Disciplina;
                
                if(!empty($nome)){
                    
                    $msg = $d->valida_disciplina($nome);
                    
                    if($msg == "Pode inserir a disciplina!"){
                    
                        $d->inserir($nome);
                        $m->setMensagem("Disciplina inserida com sucesso!");
                        header("Location: disciplinas.php");
                    
                    }else{
                        
                        $m->alert($msg);
                        
                    }
                }else{
                    
                    $m->alert("Preencha o nome!");
                    
                }
            }
        
        ?>
