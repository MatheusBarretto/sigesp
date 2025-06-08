<?php require_once("includes/topo.php"); ?>

    
    <!-- <img src="imagens/SIGESP-LOGO.png" alt="LOGO" width="100" height="150"> -->

    <div class="d-flex justify-content-center align-items-center vh-100">
        
        <div class="mb-3" style="width: 350px;">  
            <h4> LOGIN </h4>
            <form name="Login" action="validarlogin.php" method="post">
                <!-- INSERÇÃO DO USUÁRIO PARA LOGIN NO SISTEMA -->
                <label class="form-label" for="usuario">Email:</label> <br>
                <input class="form-control"type="email" id="email" name="email" value=""><br>
                <!-- INSERÇÃO DA SENHA PARA LOGIN NO SISTEMA -->
                <label class="form-label" for="senha">Senha:</label> <br>
                <input class="form-control" type="password" id="senha" name="senha" value=""><br>
                <!-- BOTÃO PARA SUBMITAR AS INFORMAÇÕES DE LOGIN -->
                <input class="btn btn-primary" type="submit" value="Entrar">
                <input class="btn btn-light" type="reset" value="Limpar"><br><br>

            </form> 

            <p style="font-size:20px">É um novo usuário? <a href="cadastro_usuario.php">Faça seu cadastro</a></p>
        <div>
    </div>


