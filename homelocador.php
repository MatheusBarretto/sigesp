<?php 
require_once 'includes/topo.php';
session_start();
if ($_SESSION['tipoUsuario']=="locador"){
    echo "<p style='color:white;'>Seja bem vindo(a) " . 
    $_SESSION['nomeUsuarios'] . "</p>";
?>
    <nav>
        <a href="editarusuario.php"> Perfil </a><br><br>
        <a href="espacoslocador.php"> Meus Espaços </a><br><br>    
        <a href="login.php"> Logout </a>
    </nav>

<?php
}else{
    echo "<h2> VOCÊ NAO TEM PERMISSÃO PARA ACESSAR ESSA PÁGINA !!! </h2>";
}

