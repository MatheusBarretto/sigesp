<?php 
require_once('banco/conexao.php');
require_once ('includes/topo.php');
?>

<body>
    <div>
        <form name="cadatro-usuario" action="inserirusuario.php" method="post">
            <label for="nome">Nome:</label><br>
            <input id="nome" name="nome" type="text"  placeholder="Nome completo" size ="56" value="" required>
            <br>
            <label for="email">Email:</label><br>
            <input id="email" name="email" type="email"  placeholder="Email@email.com" size="56" value=""required>
            <br>
            <label for="telefone">Telefone / WhatsApp:</label><br>
            <input id="telefone" name="telefone" type="text"  placeholder="(XX) XXXX-XXXX" size="56" value=""required>
            <br>
            <label for="cpf">Cpf:</label><br>
            <input id="cpf"name="cpf" type="text"  placeholder="Cpf" size="56" value=""required>
            <br>
            <label for="endereco">Endereco:</label><br>
            <input id="endereco"name="endereco"type="text"  placeholder="Ex: Rua das flores, 1010, Jardim das Flores" size="56" value=""required>
            <br>
            <label for="login">Login:</label><br>
            <input id="login"name="login" type="text"  placeholder="Login"size="56" value=""required>
            <br>    
            <label for="senha">Senha:</label><br>
            <input id="senha"name="senha"type="password"  placeholder="Senha"size="56" value=""required>
            <br>
            <label for="confirmar-senha">Confirme sua senha:</label><br>
            <input id="confirmar-senha"name="confirmar-senha" type="password"  placeholder="Confirmação"size="56" value=""required>
            <br><br>
            <input type="submit" name="Enviar"value="Cadastrar">
            <input type="reset" value="Limpar">

        </form>  
    </div>
<body>
