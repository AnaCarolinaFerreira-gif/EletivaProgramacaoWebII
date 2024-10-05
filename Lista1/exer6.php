<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
    <h1>Estimativa de Custos do Projeto</h1>
    <form method="post" action="">
        <div class="form-group">
            <label for="horasPrevistas">Horas Previstas:</label>
            <input type="number" class="form-control" id="horasPrevistas" name="horasPrevistas" required min="0">
        </div>
        <div class="form-group">
            <label for="taxaPorHora">Taxa por Hora (R$):</label>
            <input type="number" step="0.01" class="form-control" id="taxaPorHora" name="taxaPorHora" required min="0">
        </div>
        <div class="form-group">
            <label for="custosAdicionais">Custos Adicionais (R$):</label>
            <input type="number" step="0.01" class="form-control" id="custosAdicionais" name="custosAdicionais" required min="0">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Calcular Custo Total</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $horasPrevistas = isset($_POST['horasPrevistas']) ? (int)$_POST['horasPrevistas'] : 0;
        $taxaPorHora = isset($_POST['taxaPorHora']) ? (float)$_POST['taxaPorHora'] : 0.0;
        $custosAdicionais = isset($_POST['custosAdicionais']) ? (float)$_POST['custosAdicionais'] : 0.0;

        // Calculate costs
        $custoMaoDeObra = $horasPrevistas * $taxaPorHora;
        $custoTotalProjeto = $custoMaoDeObra + $custosAdicionais;

        // Output results
        echo "<div class='mt-4'>";
        echo "<h3>Resultados:</h3>";
        echo "<p><strong>Custo de Mão de Obra:</strong> R$ " . number_format($custoMaoDeObra, 2, ',', '.') . "</p>";
        echo "<p><strong>Custos Adicionais:</strong> R$ " . number_format($custosAdicionais, 2, ',', '.') . "</p>";
        echo "<p><strong>Custo Total do Projeto:</strong> R$ " . number_format($custoTotalProjeto, 2, ',', '.') . "</p>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>