<?php require_once("includes/topo.php"); ?>

<?php session_start();
    require_once 'banco/conexao.php';

    try{

        $idEspaco = $_GET ['id'];
        // var_dump($idEspaco);
        // die;
        $sql = "select * from espacos where id=:id";
        $select = $conn->prepare($sql);
        $select->bindparam(':id', $idEspaco, PDO::PARAM_INT);
        $select->execute();

        $espacos = $select->fetchAll(PDO::FETCH_ASSOC);

        if(count($espacos)==1){
        ?>           
            <form name="editar-espaco" method="post" action="atualizarespaco.php">

                <input type="hidden" name="idespaco" value="<?php echo $idEspaco;?>">
                
                <label for="descricao">Descricao:</label><br>
                <input type="text" name="descricao" value="<?php echo $espacos[0]['descricao']?>"><br>
    
                <label for="enderecoEspaco">Endereço:</label><br>
                <input type="text" name="enderecoEspaco" value="<?php echo $espacos[0]['endereco']?>"> <br>
    
                <label for="telefoneEspaco">Telefone:</label><br>
                <input type="text" name="telefoneEspaco" value="<?php echo $espacos[0]['telefone']?>"> <br>
    
                <label for="emailEspaco">E-mail:</label><br>
                <input type="email" name="emailEspaco" value="<?php echo $espacos[0]['email']?>"><br>
                <br>
                <input type="radio" value="Esportes" name="tipoEspaco">
                <label for="esportes">Area de Esportes</label><br>
    
                <input type="radio" value="Lazer" name="tipoEspaco">
                <label for="lazer">Area de Lazer</label><br>
    
                <input type="radio" value="Eventos" name="tipoEspaco">
                <label for="eventos">Area para Eventos</label><br>
                <br>
                
                <label for="preco">Valor R$</label><br>
                <input type="text" name="valor_espaco" 
                value="<?php echo $espacos[0]['preco_dia']; ?>"> <br>
    
                <input type="radio" value="por_dia" name="preco">
                <label for="preco">Por dia</label><br>
    
                <input type="radio" value="por_hora" name="preco">
                <label for="preco">Por hora</label><br>
                <br>
                <input type="submit" value="Salvar">

            </form>

    <?php
        }

    }catch(PDOException $e){
        echo "<h2 style='color:red;'>Erro: " . $e->getMessage() . "</h2>";
    }
