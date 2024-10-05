<?php
if ($_POST) {

    $horasTrabalhadas = $_POST['horasTrabalhadas'];
    $valorHora = $_POST['valorHora'];

 
    function calcularSalarioSemanal($horasTrabalhadas, $valorHora) {
    
        $salarioMensal = $horasTrabalhadas * $valorHora;


        $salarioSemanal = $salarioMensal / 4;

        return $salarioSemanal;
    }

  
    $salarioSemanal = calcularSalarioSemanal($horasTrabalhadas, $valorHora);
    
  
    echo "Salário Semanal: R$ " . number_format($salarioSemanal, 2, ',', '.');
}
?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo do Salário Semanal</title>
</head>
<body>
    <h1>Cálculo do Salário Semanal</h1>
    <form action="calculo_salario.php" method="post">
        <label for="horasTrabalhadas">Horas Trabalhadas no Mês:</label>
        <input type="number" id="horasTrabalhadas" name="horasTrabalhadas" required>
        <br><br>
        
        <label for="valorHora">Valor da Hora:</label>
        <input type="number" id="valorHora" name="valorHora" required step="0.01">
        <br><br>
        
        <input type="submit" value="Calcular Salário Semanal">
    </form>
</body>
</html>
