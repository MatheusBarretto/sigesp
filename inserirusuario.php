<?php require_once("includes/topo.php"); 

    try{
        if(isset($_POST['nome']) && isset($_POST['endereco']) && isset($_POST['email']) && isset($_POST['cpf']) && isset($_POST['telefone']) && isset($_POST['senha']) && isset($_POST['confirmar-senha']) && isset($_POST['tipo'])){

        $nomeUsuario=$_POST['nome'];
        $enderecoUsuario=$_POST['endereco'];
        $emailUsuario=$_POST['email'];
        $cpfUsuario=$_POST['cpf'];
        $telefoneUsuario=$_POST['telefone'];
        $senhaUsuario=$_POST['senha'];
        $confirmarSenha = $_POST ['confirmar-senha'];
        $tipoUsuario=$_POST['tipo'];

        }else{
            echo " <h2> O FORMULÁRIO NAO ESTÁ ENVIANDO OS DADOS ... </h2>";
        }

        if ($senhaUsuario == $confirmarSenha){
            $hashSenha = password_hash ($senhaUsuario, PASSWORD_BCRYPT);
        }   

        require_once("banco/conexao.php");

        $sql = "insert into usuario (nome, email, senha, cpf, telefone, endereco, tipo) values (:nome, :email, :senha, :cpf, :telefone, :endereco, :tipo)";

        $stmt = $conn->prepare($sql);
        $stmt->bindparam(':nome', $nomeUsuario, PDO::PARAM_STR);
        $stmt->bindparam(':email', $emailUsuario, PDO::PARAM_STR);
        $stmt->bindparam(':senha', $hashSenha, PDO::PARAM_STR);
        $stmt->bindparam(':cpf', $cpfUsuario, PDO::PARAM_STR);
        $stmt->bindparam(':telefone', $telefoneUsuario, PDO::PARAM_STR);
        $stmt->bindparam(':endereco', $enderecoUsuario, PDO::PARAM_STR);
        $stmt->bindparam(':tipo', $tipoUsuario, PDO::PARAM_STR);
        $stmt->execute();


        echo "<script> window.alert('Usuário cadastrado com sucesso!') 
            window.location.href='login.php'</script>";

    }catch(PDOException $e){
        echo "<h2 style='color:red;'>Erro: " .$e->getMessage(). "</h2>";
    }
    $conn=null;
    
