<?php require_once 'includes/topo.php';
    require_once 'estilos/style.css'?>

    
    

    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="mb-3" widht="350px">

            <h4>CADASTRO DE USUÁRIO</h4><br>
           
            <form name="Cadastro" method="post" action="inserirusuario.php">

                <label for="nome" class="form-label">Nome:</label>
                <input class="form-control form-control-lg" aria-label="Large input" type="text" name="nome" value="" placeholder="Digite seu nome">
            
                <label for="endereco" class="form-label">Endereço:</label>
                <input class="form-control form-control-lg" aria-label="Large input" name="endereco" value=""  placeholder="Digite seu edereço">
       
                <label for="email" class="form-label">E-mail:</label>
                <input style="widht: 500px"class="form-control form-control-lg" aria-label="Large input"type="email" name="email" value=""  placeholder="fulano@email.com">
      
                <label for="cpf" class="form-label">CPF:</label>
                <input class="form-control form-control-lg" aria-label="Large input" name="cpf" value=""  placeholder="Digite seu CPF">
    
                <label for="telefone" class="form-label">Telefone:</label>
                <input class="form-control form-control-lg" aria-label="Large input" name="telefone" value=""  placeholder="Digite seu telefone">

                <label for="Senha" class="form-label">Senha:</label>
                <input class="form-control form-control-lg" aria-label="Large input"type="password" name="senha" value=""  placeholder="Digite sua senha">

                <label for="confirmar-senha" class="form-label">Confirme sua senha:</label>
                <input class="form-control form-control-lg" aria-label="Large input"type="password" name="confirmar-senha" value=""  placeholder="Confirme sua senha">

                <br>

                <input type="radio" value="locatario" name="tipo">
                <label for="locatario">Quero alugar um espaço</label><br>

                <input type="radio" value="locador" name="tipo">
                <label for="locador">Quero ser um locador</label>

                <br>
                <br>    

                <input class="btn btn-primary" type="submit" value="Cadastrar"> 
                <button class="btn btn-light" type="button" onclick="window.history.back()">Voltar</button>    
                  
            </form>
        </div>
    </div>
    
