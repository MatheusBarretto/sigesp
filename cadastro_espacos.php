

<?php require_once("includes/topo.php"); ?>
   


<body>
    <h1>- CADASTRO DE ESPAÇOS -</h1>
    <form name="Cadastro_espaco" method="post" action="inserirespaco.php">
        
            <label for="descricao">Descricao:</label><br>
            <input type="text" name="descricao" value="" placeholder="Descrição"><br>

            <label for="enderecoEspaco">Endereço:</label><br>
            <input type="text" name="enderecoEspaco" value=""  placeholder="Digite o endereço"><br>

            <label for="telefoneEspaco">Telefone:</label><br>
            <input type="text" name="telefoneEspaco" value=""  placeholder="Digite o telefone"><br>

            <label for="emailEspaco">E-mail:</label><br>
            <input type="email" name="emailEspaco" value=""  placeholder="espaco@email.com"><br>
            <br>
            <input type="radio" value="Esportes" name="tipoEspaco">
            <label for="esportes">Area de Esportes</label><br>

            <input type="radio" value="Lazer" name="tipoEspaco">
            <label for="lazer">Area de Lazer</label><br>

            <input type="radio" value="Eventos" name="tipoEspaco">
            <label for="eventos">Area para Eventos</label><br>
            <br>
            <label for="preco_h">Valor R$</label><br>
            <input type="float" name="valor_espaco" value=""  placeholder="Digite o valor"><br>

            <input type="radio" value="por_dia" name="preco">
            <label for="preco">Por dia</label><br>

            <input type="radio" value="por_hora" name="preco">
            <label for="preco">Por hora</label><br>
            <br>
            <input type="submit" value="Cadastro_espaco">

    </form>
</body>
</html>