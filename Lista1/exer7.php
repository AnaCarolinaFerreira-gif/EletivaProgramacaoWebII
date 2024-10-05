<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
    <h1>Avaliação de Desempenho do Projeto</h1>
    <form method="post" action="">
        <div class="form-group">
            <label for="prazo">Prazo para a Finalização do Projeto (dias):</label>
            <input type="number" class="form-control" id="prazo" name="prazo" required min="1">
        </div>
        <div class="form-group">
            <label for="atividadesTotais">Total de Atividades Estabelecidas:</label>
            <input type="number" class="form-control" id="atividadesTotais" name="atividadesTotais" required min="1">
        </div>
        <div class="form-group">
            <label for="atividadesDesenvolvidas">Atividades Já Desenvolvidas:</label>
            <input type="number" class="form-control" id="atividadesDesenvolvidas" name="atividadesDesenvolvidas" required min="0">
        </div>
        <div class="form-group">
            <label for="atividadesPorDia">Atividades Desenvolvidas por Dia:</label>
            <input type="number" class="form-control" id="atividadesPorDia" name="atividadesPorDia" required min="1">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Avaliar Desempenho</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $prazo = (int)$_POST['prazo'];
        $atividadesTotais = (int)$_POST['atividadesTotais'];
        $atividadesDesenvolvidas = (int)$_POST['atividadesDesenvolvidas'];
        $atividadesPorDia = (int)$_POST['atividadesPorDia'];

        // Calcular progresso
        $progresso = ($atividadesDesenvolvidas / $atividadesTotais) * 100;
        $atividadesRestantes = $atividadesTotais - $atividadesDesenvolvidas;

        $diasRestantes = $prazo - ceil($atividadesRestantes / $atividadesPorDia);

        $status = '';
        if ($diasRestantes > 0) {
            $status = "A equipe está dentro do prazo.";
        } elseif ($diasRestantes == 0) {
            $status = "A equipe está exatamente no prazo.";
        } else {
            $status = "A equipe está atrasada em " . abs($diasRestantes) . " dias.";
        }

        // Mostrar resultados
        echo "<div class='mt-4'>";
        echo "<h3>Resultados:</h3>";
        echo "<p><strong>Progresso Atual do Projeto:</strong> " . number_format($progresso, 2, ',', '.') . "%</p>";
        echo "<p><strong>Atividades Restantes:</strong> " . $atividadesRestantes . "</p>";
        echo "<p><strong>Dias Restantes para Conclusão:</strong> " . $diasRestantes . "</p>";
        echo "<p><strong>Status:</strong> " . $status . "</p>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>