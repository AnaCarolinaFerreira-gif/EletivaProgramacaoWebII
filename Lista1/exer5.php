<?php
if ($_POST) {

    $diasTrabalhados = $_POST['diasTrabalhados'];
    $feriasInformadas = $_POST['feriasInformadas'];

    function calcularFerias($diasTrabalhados, $feriasInformadas) {
        $diasDeFerias = floor($diasTrabalhados / 30);
        
        if ($diasDeFerias > 30) {
            $diasDeFerias = 30;
        }
        
        return min($diasDeFerias, $feriasInformadas);
    }

    // Calcula os dias de férias do funcionário
    $diasFerias = calcularFerias($diasTrabalhados, $feriasInformadas);
    
    // Exibe o resultado
    echo "O funcionário tem direito a {$diasFerias} dias de férias.";
}
?>





<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Dias de Férias</title>
</head>
<body>
    <h1>Cálculo de Dias de Férias</h1>
    <form action="calculo_ferias.php" method="post">
        <label for="diasTrabalhados">Total de Dias Trabalhados:</label>
        <input type="number" id="diasTrabalhados" name="diasTrabalhados" required>
        <br><br>
        
        <label for="feriasInformadas">Total de Dias de Férias Informados:</label>
        <input type="number" id="feriasInformadas" name="feriasInformadas" required>
        <br><br>
        
        <input type="submit" value="Calcular Dias de Férias">
    </form>
</body>
</html>
