<?php 
require_once 'includes/topo.php';
session_start();
if ($_SESSION['tipoUsuario']== "locatario"){
    echo "<p style='color:blue;'>Seja bem vindo(a) " . 
    $_SESSION['nomeUsuarios'] . "</p>";
?>

<nav>
        <a href="editarusuario.php"> Perfil </a><br><br>
        <a href="listarespacos.php"> Alugar Espaços </a><br><br>
        <a href="perfil.php"> Meus Agendamentos </a><br><br>    
        <a href="perfil.php"> Logout </a>
    </nav>
    
<?php

}else{
    echo "<h2> VOCÊ NAO TEM PERMISSÃO PARA ACESSAR ESSA PÁGINA !!! </h2>";
}
