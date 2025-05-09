<?php require_once ('includes/topo.php');


    if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['cpf']) && isset($_POST['endereco']) && isset($_POST['login']) && isset($_POST['senha']) && isset($_POST['confirmar-senha']) && isset($_POST['telefone'])){
    
    $nomeUsuario = $_POST['nome'];
    $emailUsuario = $_POST['email'];  
    $cpfUsuario = $_POST['cpf'];  
    $enderecoUsuario = $_POST['endereco'];  
    $loginUsuario = $_POST['login'];  
    $senhaUsuario = $_POST['senha'];  
    $confirmarSenha = $_POST['confirmar-senha']; 
    $telefoneUsuario = $_POST['telefone']; 
    
    
    
    if($senhaUsuario == $confirmarSenha){
        try{
            $hash = password_hash($senhaUsuario, PASSWORD_BCRYPT);
            
            require_once ('banco/conexao.php');

            $sql = "insert into usuarios (nome, email, cpf, endereco, login, senha, telefone) values (:nome, :email, :cpf, :endereco, :login, :senha, :telefone)";
            
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':nome', $nomeUsuario, PDO::PARAM_STR);
            $stmt->bindParam(':email', $emailUsuario, PDO::PARAM_STR);
            $stmt->bindParam(':cpf', $cpfUsuario, PDO::PARAM_STR);
            $stmt->bindParam(':endereco', $enderecoUsuario, PDO::PARAM_STR);
            $stmt->bindParam(':login', $loginUsuario, PDO::PARAM_STR);
            $stmt->bindParam(':senha', $hash, PDO::PARAM_STR);
            $stmt->bindParam(':telefone', $telefoneUsuario, PDO::PARAM_STR);
            $stmt->execute();

            
            echo "Cadastro realizado!";

        }catch(PDOException $e){
            echo "<h2 style='color:red;'>Erro: " . $e->getMessage() . 
            "</h2>";
        }
        }   

    }else{
        echo "DEU RUIM...";
    }
   

?>