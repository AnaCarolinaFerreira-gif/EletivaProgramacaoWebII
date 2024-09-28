<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
    <h2>Calcular Área do Círculo</h2>
    <form action="/resultado-exercicio9" method="get">
        @csrf
        <div class="mb-3">
            <label for="raio" class="form-label">Raio:</label>
            <input type="number" class="form-control" name="raio" required>
        </div>
        <button type="submit" class="btn btn-primary">Calcular Área</button>
    </form>
</div>
</body>
</html>