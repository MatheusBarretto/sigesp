<?php require_once("includes/topo.php"); ?>

<?php
session_start();

//     if(isset($_SESSION['tipoUsuario'])=="locador" || isset($_SESSION['tipoUsuario'])=="locatario"){
// ?>
        <h1>- CADASTRO DE AGENDAMENTOS -</h1>
            <form name="cadastro-agendamento" method="post" action="inseriragendamento.php">

                <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
            
                <label for="data-agendamento"> <b>Data do agendamento</b></label><br>

                <label for="data-inicio">De:</label>
                <input type="date" name="data-inicio" value="">

                <label for="data-fim">Até:</label>
                <input type="date" name="data-final" value=""><br><br>


                <label for="horario-agendamento"> <b>Horário do agendamento</b></label><br>
                <label for="horario-inicio">De:</label>
                <input type="time" name="horario-inicio" value="">

                <label for="horario-fim">Até:</label>
                <input type="time" name="horario-final" value=""><br><br>

                <input type="submit" value="AGENDAR">
                <button type="button" onclick="window.history.back()">Cancelar</button>
            </form>
