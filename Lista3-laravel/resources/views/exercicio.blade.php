<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container mt-5">
    <h2>Converter Fahrenheit para Celsius</h2>
    <form action="/resultado-exercicio6" method="get">
        @csrf
        <div class="mb-3">
            <label for="fahrenheit" class="form-label">Temperatura em Fahrenheit:</label>
            <input type="number" class="form-control" name="fahrenheit" required>
        </div>
        <button type="submit" class="btn btn-primary">Converter</button>
    </form>
</div>
</body>
</html>