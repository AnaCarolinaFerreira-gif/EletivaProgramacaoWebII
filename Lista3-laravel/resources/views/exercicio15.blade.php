<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
<h1>Exercício 15: Calcular IMC</h1>
    <form action="/resultado-exercicio15" method="GET">
        <label for="peso">Peso (kg):</label>
        <input type="number" name="peso" required>
        <label for="altura">Altura (m):</label>
        <input type="number" name="altura" step="0.01" required>
        <button type="submit">Calcular IMC</button>
    </form>
</div>
</body>
</html>