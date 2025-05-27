<?php require_once ('banco/conexao.php');?>
<?php require_once ('includes/topo.php');?>

<?php 
try{
    $sql = "select id,
            descricao,
            data_cadastro,
            categoria,
            preco_hr,
            preco_dia
            from espacos;
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
            <!-- <th>DATA DE CADASTRO</th> -->
            <th>CATEGORIA</th>
            <th>PREÇO POR HORA</th>
            <th>PREÇO POR DIA</th>
            <th>AGENDAR</th>
        </thead>
        
        <tbody class="text-left">
            <?php foreach ($espacos as $espacos){?>
                <tr>
                    <td><?php echo $espacos ['id'];?></td>
                    <td><?php echo $espacos ['descricao'];?></td>
                    <!-- <td><?php echo $espacos ['data_cadastro'];?></td> -->
                    <td><?php echo $espacos ['categoria'];?></td>
                    <td><?php echo $espacos ['preco_hr'];?></td>
                    <td><?php echo $espacos ['preco_dia'];?></td>
                    <td class="text-center">
                        <a href="cadastroagendamento.php?id=<?php echo $espacos ['id'];?>"><span title="Reservar"class="material-symbols-outlined">calendar_month</span></a>
                    </td>
                </tr>
            <?php }?>
        </tbody>
    </table>
</div>