<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
</head>
<body>
<div class="container mt-5">
    <h2>Exercício 7: Converter Celsius para Fahrenheit</h2>
    <form action="/resultado-exercicio7" method="get">
        @csrf
        <div class="mb-3">
            <label for="celsius" class="form-label">Temperatura em Celsius:</label>
            <input type="number" class="form-control" name="celsius" required>
        </div>
        <button type="submit" class="btn btn-primary">Converter</button>
    </form>
</div>
</body>
</html>