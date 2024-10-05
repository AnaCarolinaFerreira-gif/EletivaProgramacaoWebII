<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 17</title>
</head>
<body>
<div class="container mt-5">
<h1>Exercício 17: Calcular Capital</h1>
    <form action="{{ url('/resultado-exercicio17') }}" method="GET">
        <label for="montante">Montante:</label>
        <input type="number" name="montante" required>
        <label for="taxa">Taxa (%):</label>
        <input type="number" name="taxa" required>
        <label for="tempo">Tempo (anos):</label>
        <input type="number" name="tempo" required>
        <button type="submit">Calcular Capital</button>
    </form>
</div>
</body>
</html>