<?php require_once ('banco/conexao.php');?>
<?php require_once ('includes/topo.php');?>

<?php 

session_start();

if ($_SESSION['tipoUsuario']=="locador"){
    echo "<p style='color:blue;'>Seja bem vindo(a) " . 
    $_SESSION['nomeUsuarios'] . "</p>";

    try{
        $sql = "select id,
                descricao,
                data_cadastro,
                categoria,
                preco_hr,
                preco_dia
                from espacos where fk_usuario_id = ".$_SESSION['idUsuario'].";
                ";

        $select = $conn->prepare($sql);
        $select->execute();

        $espacos = $select->fetchAll(PDO::FETCH_ASSOC);
        $titulo = "SIGESP";
    }
    catch(PDOException $erro){
        echo "<h2 style='color:red;'> ERRO: ".$erro->getMessage(). "<h2>";
    };
    ?>

    <?php require_once('includes/topo.php')?>

    <div class="container">
        <table class="table table-striped table-bordered">
            <thead class="text-center">
                <th>ID</th>
                <th>DESCRIÇÃO</th>
                <th>DATA DE CADASTRO</th>
                <th>CATEGORIA</th>
                <th>PREÇO P/ HORA</th>
                <th>PREÇO P/ DIA</th>
                <th>EDITAR / EXCLUIR</th>
            </thead>
            
            <a href="homelocador.php"><span class="material-symbols-outlined">home</span></a>
            <a href="cadastro_espacos.php"><span class="material-symbols-outlined">add_box</span></a><br><br>
            <tbody class="text-left">
                <?php foreach ($espacos as $espacos){?>
                    <tr>
                        <td><?php echo $espacos ['id'];?></td>
                        <td><?php echo $espacos ['descricao'];?></td>
                        <td><?php echo $espacos ['data_cadastro'];?></td>
                        <td><?php echo $espacos ['categoria'];?></td>
                        <td><?php echo $espacos ['preco_hr'];?></td>
                        <td><?php echo $espacos ['preco_dia'];?></td>
                        <td class="text-center">
                            <a href="editarusuario.php"><span class="material-symbols-outlined">edit</span></a>
                            <a href="excluirusuario.php"><span class="material-symbols-outlined">delete</span></a>
                        </td>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
<?php
}else{
    echo "<h2> VOCÊ NAO TEM PERMISSÃO PARA ACESSAR ESSA PÁGINA !!! </h2>";
}