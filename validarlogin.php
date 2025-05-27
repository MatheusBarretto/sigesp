<?php 
require_once 'includes/topo.php';
require_once 'banco/conexao.php';

try{
    if(isset($_POST['email']) && isset($_POST['senha'])){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        $sql= "select * from usuario where email=:email;";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->execute();

        // $select->bindParam('senha', $senha, PDO::PARAM_STR);

        $usuarios = $stmt->fetchAll(mode: PDO::FETCH_ASSOC);

        // var_dump($usuarios);
        // die;

        $hashSenha = $usuarios[0]['senha'];
        // var_dump($hashSenha);
        //var_dump($senha);
        //var_dump(password_hash ($senhaUsuario, PASSWORD_BCRYPT));
        //die;

            if(password_verify($senha, $hashSenha)){
                if($usuarios[0]['tipo'] == "locador"){
                    session_start();
                    $_SESSION['tipoUsuario'] = "locador";
                    $_SESSION['idUsuario'] = $usuarios [0]['id'];
                    $_SESSION['nomeUsuarios'] = $usuarios [0]['nome'];
                    echo "<script> window.alert('Login efetuado com sucesso!') 
                        window.location.href='homelocador.php'</script>";
                }
                    if($usuarios[0]['tipo'] == "locatario"){
                        session_start();
                        $_SESSION ['tipoUsuario'] = "locatario";
                        $_SESSION['idUsuario'] = $usuarios [0]['id'];
                        $_SESSION['nomeUsuarios'] = $usuarios [0]['nome'];
                        echo "<script> window.alert('Login efetuado com sucesso!') 
                            window.location.href='homelocatario.php'</script>";
                };

            }else{
                echo "<h2>Usuário ou senha inválidos.</h2>";
                echo "<p> Clique <a href='login.php'>aqui </a>para voltar.</p>";
            }

        }else{
        
    }
        

}catch(PDOException $e){

}
