<?php require_once("includes/topo.php"); ?>



    <div class="row" style="width: 500px; margin: auto;" >
        <h4> SIGESP LOGIN </h4>
        <div class="col-md-6; input-group mb-6">
            <form name="Login" action="validarlogin.php" method="post">
                <!-- INSERÇÃO DO USUÁRIO PARA LOGIN NO SISTEMA -->
                <label class="form-label"for="usuario">Email:</label> <br>
                <input class="form-control"type="email" id="email" name="email" value=""><br>
                <!-- INSERÇÃO DA SENHA PARA LOGIN NO SISTEMA -->
                <label class="form-label" for="senha">Senha:</label> <br>
                <input class="form-control" type="password" id="senha" name="senha" value=""><br><br>
                <!-- BOTÃO PARA SUBMITAR AS INFORMAÇÕES DE LOGIN -->
                <input type="submit" value="Entrar">
                <input type="reset" value="Limpar"><br><br>
            </form>  
        </div>
    <div>

<p class ="p-login">É um novo usuário? <a href="cadastro_usuario.php">clique aqui</a> e faça seu cadastro ?</p>
