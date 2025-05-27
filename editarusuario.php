<?php 
require_once 'includes/topo.php';

session_start();    
    try{
        if(isset($_SESSION['idUsuario'])){
            require_once 'banco/conexao.php';

            $idUsuario = $_SESSION['idUsuario'];
            

            $sql = "select * from usuario where id =:id;";
            $stmt = $conn->prepare($sql);
            $stmt->bindparam(':id', $idUsuario, PDO::PARAM_INT);
            $stmt->execute();

            $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if(count($usuarios)==1){
            ?>
                
                <h1> - EDITAR PERFIL - </h1>

                    <form name="Editar-usuario" method="post" action="atualizar.php">
                    <label for="nome">Nome:</label><br>
                    <input type="text" name="nome" value="<?php echo $usuarios[0]['nome']?>" placeholder="Digite seu nome"><br>

                    <label for="endereco">Endereço:</label><br>
                    <input type="text" name="endereco" value="<?php echo $usuarios[0]['endereco']?>"  placeholder="Digite seu edereço"><br>

                    <label for="email">E-mail:</label><br>
                    <input type="email" name="email" value="<?php echo $usuarios[0]['email']?>"  placeholder="fulano@email.com"><br>

                    <label for="cpf">CPF:</label><br>
                    <input type="text" name="cpf" value="<?php echo $usuarios[0]['cpf']?>"  placeholder="Digite seu CPF"><br>

                    <label for="telefone">Telefone:</label><br>
                    <input type="text" name="telefone" value="<?php echo $usuarios[0]['telefone']?>"  placeholder="Digite seu telefone"><br>
                    
                    <br>
                    <br>    
                    <input type="submit" value="Salvar">
                    <button type="button" onclick="window.history.back()">Voltar</button>
                <?php
            }
        }


    }catch(PDOException $e){
        echo "<h2 style='color:red;'>Erro: " . $e->getMessage() . "</h2>";
    }


    