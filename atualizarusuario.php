<?php require_once("includes/topo.php"); 

session_start();
    try{
        if(isset($_POST['nome']) && isset($_POST['endereco']) && isset($_POST['email']) && isset($_POST['telefone'])){
            
            $idUsuario = $_SESSION ['idUsuario'];
            $tipoUsuario = $_SESSION['tipoUsuario'];
            $nomeUsuario=$_POST['nome'];
            $enderecoUsuario=$_POST['endereco'];
            $emailUsuario=$_POST['email'];
            $telefoneUsuario=$_POST['telefone'];

            
            require_once ("banco/conexao.php");

            $sql = "update usuario set nome=:nome, email=:email, telefone=:telefone, endereco=:endereco where id=:id";

            $stmt = $conn->prepare($sql);
            $stmt->bindparam(':id', $idUsuario, PDO::PARAM_INT);
            $stmt->bindparam(':nome', $nomeUsuario, PDO::PARAM_STR);
            $stmt->bindparam(':email', $emailUsuario, PDO::PARAM_STR);
            $stmt->bindparam(':telefone', $telefoneUsuario, PDO::PARAM_STR);
            $stmt->bindparam(':endereco', $enderecoUsuario, PDO::PARAM_STR);
            $stmt->execute();

            $linhas_atualizadas = $stmt->rowCount();

            if($linhas_atualizadas==1){
                
                if($tipoUsuario=="locatario"){
                    echo "<script>window.alert('Perfil atualizado com sucesso!') 
                        window.location.href='homelocatario.php'</script>";
                }   
                if($tipoUsuario=="locador"){
                    echo "<script>window.alert('Perfil atualizado com sucesso!') 
                        window.location.href='homelocador.php'</script>";
                }
                
            $_SESSION['nomeUsuarios'] = $nomeUsuario;    

            }else{
                echo"ERRO AO ATUALIZAR!";
            }

        }else{
            echo " <h2> O FORMULÁRIO NAO ESTÁ ENVIANDO OS DADOS ... </h2>";
        }
        

        

    }catch(PDOException $e){
        echo "<h2 style='color:red;'>Erro: " .$e->getMessage(). "</h2>";
    }
    $conn=null;
    
