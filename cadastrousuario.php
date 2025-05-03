<?php 
require_once('banco/conexao.php');
require_once ('includes/topo.php');
?>

<body>
    <div>
        <form name="cadatro-usuario" action="inserirusuario.php" method="post">
            <label for="nome">Nome:</label><br>
            <input name="nome"type="text" require="true" placeholder="Nome completo" size ="56" value="">
            <br>
            <label for="email">Email:</label><br>
            <input name="emial"type="email" require="true" placeholder="Email@email.com" size="56" value="">
            <br>
            <label for="cpf">Cpf:</label><br>
            <input name="cpf"type="cpf" require="true" placeholder="Cpf" size="56" value="">
            <br>
            <label for="endereco">Endereco:</label><br>
            <input name="endereco"type="text" require="true" placeholder="Ex: Rua das flores, 1010, Jardim das Flores" size="56" value="">
            <br>
            <label for="login">Login:</label><br>
            <input name="login" type="text" require="true" placeholder="Login"size="56" value="">
            <br>    
            <label for="senha">Senha:</label><br>
            <input name="senha"type="password" require="true" placeholder="Senha"size="56" value="">
            <br>
            <label for="confirmar-senha">Confirme sua senha:</label><br>
            <input name="confirmar-senha" type="password" require="true" placeholder="Confirmação"size="56" value="">
            <br><br>
            <input type="submit" value="Cadastrar">
            <input type="reset" value="Limpar">
        </form>  
    </div>
<body>
