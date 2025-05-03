<?php 
require_once('banco/conexao.php');
require_once ('includes/topo.php');

try{
    if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['cpf']) && isset($_POST['endereco']) && isset($_POST['login']) && isset($_POST['senha']) && isset($_POST['confirmar-senha'])){

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $confirmarSenha = $_POST['confimar-senha'];

        if($senha == $confirmarSenha){
            $sql = "INSERT INTO usuarios (nome, email, cpf, endereco, login, senha)
            VALUES (:nome, :email, :cpf, :login, :senha)";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':cpf', $cpf, PDO::PARAM_STR);
            $stmt->bindParam(':endereco', $endereco, PDO::PARAM_STR);
            $stmt->bindParam(':login', $login, PDO::PARAM_STR);
            $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);
            $stmt->execute();

            $conn->exec($sql);
            echo "USUARIO CADASTRADO COM SUCESSO!"; 
        }else{
            echo "DEU RUIM;";
        }
            
            // // $sql = "insert into usuarios(nome, email, cpf, login, senha) values ('".$nome."', '".$emil."', '".$cpf."', '".$login."', '".$senha."')";
            // $insert = $conn->prepare($sql);
        
           
    }else{
        echo ("<p> Você deve prencher os campos, clique <a href=cadastrousuario.php>aqui</a> para voltar.");
    }
   
}catch(PDOException $e){
    echo "<h2 style='color:red;'>Erro: " . $e->getMessage() . 
    "</h2>";
}
?>