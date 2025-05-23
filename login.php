<?php require_once("includes/topo.php"); ?>

<p> SIGESP :: LOGIN </p>
    <form name="Login" action="validarlogin.php" method="post">
        <!-- INSERÇÃO DO USUÁRIO PARA LOGIN NO SISTEMA -->
        <label for="usuario">Email:</label> <br>
        <input type="email" id="email" name="email" value=""><br>
        <!-- INSERÇÃO DA SENHA PARA LOGIN NO SISTEMA -->
        <label for="senha">Senha:</label> <br>
        <input type="password" id="senha" name="senha" value=""><br><br>
        <!-- BOTÃO PARA SUBMITAR AS INFORMAÇÕES DE LOGIN -->
        <input type="submit" value="Entrar">
        <input type="reset" value="Limpar"><br><br>
        <p>É um novo usuário? <a href="cadastro_usuario.php">clique aqui</a> e faça seu cadastro ?</p>
    </form>
