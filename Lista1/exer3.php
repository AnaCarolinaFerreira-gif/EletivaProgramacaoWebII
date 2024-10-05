<?php
if ($_POST) {
   
    $lucros = $_POST['lucros'];
    $funcionario = $_POST['funcionario'];
    $desempenho = $_POST['desempenho'];

    function calcularBonus($lucros, $desempenho) {
        
        switch ($desempenho) {
            case 1:
                $percentual = 0.001; // 0,1%
                break;
            case 2:
                $percentual = 0.002; // 0,2%
                break;
            case 3:
                $percentual = 0.003; // 0,3%
                break;
            case 4:
                $percentual = 0.006; // 0,6%
                break;
            case 5:
                $percentual = 0.007; // 0,7%
                break;
            default:
                $percentual = 0; 
                break;
        }
        
        $bonus = $lucros * $percentual;
        return $bonus;
    }

    // Calcula o bônus do funcionário
    $bonusFuncionario = calcularBonus($lucros, $desempenho);
    
    // Exibe o resultado
    echo "Funcionário: " . htmlspecialchars($funcionario) . "<br>";
    echo "Bônus Anual: R$ " . number_format($bonusFuncionario, 2, ',', '.');
}
?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distribuição de Bônus Anual</title>
</head>
<body>
    <h1>Distribuição de Bônus Anual</h1>
    <form action="distribuicao_bonus.php" method="post">
        <label for="lucros">Valor dos Lucros da Empresa (R$):</label>
        <input type="number" id="lucros" name="lucros" required step="0.01">
        <br><br>
        
        <label for="funcionario">Nome do Funcionário:</label>
        <input type="text" id="funcionario" name="funcionario" required>
        <br><br>

        <label for="desempenho">Escala de Desempenho (1 a 5):</label>
        <input type="number" id="desempenho" name="desempenho" min="1" max="5" required>
        <br><br>
        
        <input type="submit" value="Calcular Bônus">
    </form>
</body>
</html>
