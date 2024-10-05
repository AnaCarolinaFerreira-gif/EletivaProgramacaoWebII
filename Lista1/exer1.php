<?php
if ($_POST) {
    $entrada = $_POST['entrada'];
    $saida = $_POST['saida'];

    function calcularHorasTrabalhadas($entrada, $saida) {
        $entradaTimestamp = strtotime($entrada);
        $saidaTimestamp = strtotime($saida);
        
        if ($saidaTimestamp < $entradaTimestamp) {
            return "Erro: O horário de saída deve ser posterior ao horário de entrada.";
        }
        
        $diferencaSegundos = $saidaTimestamp - $entradaTimestamp;
        
        $horasTrabalhadas = $diferencaSegundos / 3600;
        
        return $horasTrabalhadas;
    }

    $horasTrabalhadas = calcularHorasTrabalhadas($entrada, $saida);
    
    if (is_numeric($horasTrabalhadas)) {
        echo "Total de horas trabalhadas: " . $horasTrabalhadas . " horas";
    } else {
        echo $horasTrabalhadas; // Exibe a mensagem de erro
    }
}
?>




<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Horas Trabalhadas</title>
</head>
<body>
    <h1>Registro de Horas Trabalhadas</h1>
    <form action="calculo_horas.php" method="post">
        <label for="entrada">Horário de Entrada:</label>
        <input type="time" id="entrada" name="entrada" required>
        <br><br>
        
        <label for="saida">Horário de Saída:</label>
        <input type="time" id="saida" name="saida" required>
        <br><br>
        
        <input type="submit" value="Calcular Horas Trabalhadas">
    </form>
</body>
</html>
