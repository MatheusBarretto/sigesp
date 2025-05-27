<?php require_once("includes/topo.php"); ?>


<?php
session_start();
if (isset($_SESSION['tipoUsuario'])=="locatario"){
    try{
        if(isset($_SESSION['idUsuario']) && isset($_POST['id'])){
            $idUsuario = $_SESSION=['idUsuario'];
            $idEspaco = $_POST['id']; 
            $dataInicio = $_POST['data-inicio'];
            $dataFinal = $_POST['data-final'];
            $horarioInicio = $_POST['horario-inicio'];
            $horarioFim = $_POST['horario-final'];
            
            // var_dump($dataInicio);
            // var_dump($horarioInicio);
            // var_dump($dataFinal);
            // var_dump($horarioFim);
            // die;
            
            require_once 'banco/conexao.php';

            $sql = "insert into agendamentos(data_inicio, datafinal, usuario_id, espacos_id) values ':datainicio' ':horainicio', ':datafinal' ':horafinal', :idusuario, :idespaco";

            $stmt = $conn->prepare($sql);
            $stmt->bindparam(':datainicio', $dataInicio);
            $stmt->bindparam(':horainicio', $horarioInicio);
            $stmt->bindparam(':datafinal', $dataFinal);
            $stmt->bindparam(':horafinal', $horarioFim);
            $stmt->bindparam(':idusuario', $idUsuario, PDO::PARAM_INT);
            $stmt->bindparam(':idespaco', $idEspaco, PDO::PARAM_INT);
            $stmt->execute();

            echo "<script> window.alert('Horário agendado com sucesso!') 
            window.location.href='homelocatario.php'</script>";
        }

    }catch(PDOException $e){
        echo "<h2 style='color:red;'>Erro: " .$e->getMessage(). "</h2>";
    }
    
}else{
    echo "<h2> VOCÊ NAO TEM PERMISSÃO PARA ACESSAR ESSA PÁGINA !!! </h2>";
}
    