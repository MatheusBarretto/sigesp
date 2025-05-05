<?php require_once ('includes/topo.php');


    // if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['cpf']) && isset($_POST['endereco']) && isset($_POST['login']) && isset($_POST['senha']) && isset($_POST['confirmar_senha'])){
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email'] ??'');
    $cpf = trim($_POST['cpf']);
    $endereco = trim($_POST['endereco']);
    $login = trim($_POST['login']);
    $senha = trim($_POST['senha']);
    $confirmarSenha = trim($_POST['confirmar_senha']??'');
    
    if($senha === $confirmarSenha){
        try{
            // $hash = password_hash($senha, PASSWORD_BCRYPT);
            // $sql = "insert into usuarios (nome, email, cpf, endereco, login, senha) values ('".$nome."', '".$email."', '".$cpf."', '".$endereco."', '".$login."', '".$hash."')";
            
            $sql = "INSERT INTO usuarios (nome, email, cpf, endereco, login, senha)
                    VALUES (:nome, :email, :cpf, :login, :senha)";

            $stmt->prepare($sql);
            $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':cpf', $cpf, PDO::PARAM_STR);
            $stmt->bindParam(':endereco', $endereco, PDO::PARAM_STR);
            $stmt->bindParam(':login', $login, PDO::PARAM_STR);
            $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);
            $stmt->execute();
            
            echo "Cadastro realizado!";

        }catch(PDOException $e){
            echo "<h2 style='color:red;'>Erro: " . $e->getMessage() . 
            "</h2>";
        }

    }else{
        echo "DEU RUIM...";
    }
   

?>