<?php require_once("includes/topo.php"); ?>


<?php
session_start();
if ($_SESSION['tipoUsuario']=="locador" ){
    echo "<p style='color:blue;'>Seja bem vindo(a) " . 
    $_SESSION['nomeUsuarios'] . "</p>";

    try{
        if(isset($_POST['descricao']) && isset($_POST['enderecoEspaco']) && isset($_POST['emailEspaco']) && isset($_POST['telefoneEspaco']) && isset($_POST['tipoEspaco']) && isset($_POST['preco']) && isset($_POST['valor_espaco'])){

        $descricaoEspaco=$_POST['descricao'];
        $enderecoEspaco=$_POST['enderecoEspaco'];
        $emailEspaco=$_POST['emailEspaco'];
        $telefoneEspaco=$_POST['telefoneEspaco'];
        $categoriaEspaco=$_POST['tipoEspaco'];
        $tipoCobranca=$_POST['preco'];
        $valorEspaco=$_POST['valor_espaco'];
        $idLocatario = $_SESSION['idUsuario'];
        
        

        require_once("banco/conexao.php");

        if($tipoCobranca=="por_hora"){
            $sql = "insert into espacos (descricao, endereco, telefone, email, categoria, preco_hr, usuario_id) values (:descricao, :endereco, :telefone, :email, :categoria, :preco_hr, :idusuario)";

            $stmt = $conn->prepare($sql);
            $stmt->bindparam(':descricao', $descricaoEspaco, PDO::PARAM_STR);
            $stmt->bindparam(':endereco', $enderecoEspaco, PDO::PARAM_STR);
            $stmt->bindparam(':telefone', $telefoneEspaco, PDO::PARAM_STR);
            $stmt->bindparam(':email', $emailEspaco, PDO::PARAM_STR);
            $stmt->bindparam(':categoria', $categoriaEspaco, PDO::PARAM_STR);
            $stmt->bindparam(':preco_hr', $valorEspaco, PDO::PARAM_INT);
            $stmt->bindparam(':idusuario', $idLocatario, PDO::PARAM_INT);
            $stmt->execute();

            echo "<script> window.alert('Espaço cadastrado com sucesso!') 
            window.location.href='espacoslocatario.php'</script>";


        }else{
            $sql = "insert into espacos (descricao, endereco, telefone, email, categoria, preco_dia, usuario_id) values (:descricao, :endereco, :telefone, :email, :categoria, :preco_dia, :idusuario)";

            $stmt = $conn->prepare($sql);
            $stmt->bindparam(':descricao', $descricaoEspaco, PDO::PARAM_STR);
            $stmt->bindparam(':endereco', $enderecoEspaco, PDO::PARAM_STR);
            $stmt->bindparam(':telefone', $telefoneEspaco, PDO::PARAM_STR);
            $stmt->bindparam(':email', $emailEspaco, PDO::PARAM_STR);
            $stmt->bindparam(':categoria', $categoriaEspaco, PDO::PARAM_STR);
            $stmt->bindparam(':preco_dia', $valorEspaco, PDO::PARAM_INT);
            $stmt->bindparam(':idusuario', $idLocatario, PDO::PARAM_INT);
            $stmt->execute();

            
            echo "<script> window.alert('Espaço cadastrado com sucesso!') 
            window.location.href='espacoslocador.php'</script>";
        }
        }else{
            echo " <h2> O FORMULÁRIO NAO ESTÁ ENVIANDO OS DADOS ... </h2>";
        }



     
    }catch(PDOException $e){
        echo "<h2 style='color:red;'>Erro: " .$e->getMessage(). "</h2>";
    }
    
}else{
    echo "<h2> VOCÊ NAO TEM PERMISSÃO PARA ACESSAR ESSA PÁGINA !!! </h2>";
}
    