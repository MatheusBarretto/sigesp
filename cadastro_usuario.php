<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>- CADASTRO DE USUÁRIO -</h1>
        <form name="Cadastro" method="post" action="inserirusuario.php">
            <label for="nome">Nome:</label><br>
            <input type="text" name="nome" value="" placeholder="Digite seu nome"><br>

            <label for="endereco">Endereço:</label><br>
            <input type="text" name="endereco" value=""  placeholder="Digite seu edereço"><br>

            <label for="email">E-mail:</label><br>
            <input type="email" name="email" value=""  placeholder="fulano@email.com"><br>

            <label for="cpf">CPF:</label><br>
            <input type="text" name="cpf" value=""  placeholder="Digite seu CPF"><br>

            <label for="telefone">Telefone:</label><br>
            <input type="text" name="telefone" value=""  placeholder="Digite seu telefone"><br>
            
            
            <label for="Senha">Senha:</label><br>
            <input type="password" name="senha" value=""  placeholder="Digite sua senha"><br>

            <label for="confirmar-senha">Confirme sua senha:</label><br>
            <input type="password" name="confirmar-senha" value=""  placeholder="Confirme sua senha"><br>

            <br>
            <input type="radio" value="locatario" name="tipo">
            <label for="locatario">Quero alugar um espaço</label><br>

            <input type="radio" value="locador" name="tipo">
            <label for="locador">Quero ser um locador</label><br>

            <br>
            <br>    
            <input type="submit" value="Cadastrar">

    </form>
</body>
</html>