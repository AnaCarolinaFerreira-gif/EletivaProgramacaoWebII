<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
    <h2>Calcular Média</h2>
    <form class="row" action="/resultado-exercicio5" method="POST">
        @csrf
        @method('GET')
        <div class="col mb-3">
            <label for="nota-1" class="form-label">Nota 1:</label>
            <input type="number" step="0.1" class="form-control" name="nota-1" required>
        </div>
        <div class="col mb-3">
            <label for="nota-2" class="form-label">Nota 2:</label>
            <input type="number" step="0.1" class="form-control" name="nota-2" required>
        </div>
        <div class="col mb-3">
            <label for="nota-3" class="form-label">Nota 3:</label>
            <input type="number" step="0.1" class="form-control" name="nota-3" required>
        </div>
        <button type="submit" class="btn btn-primary">Calcular Média</button>
    </form>
</div>
</body>
</html>