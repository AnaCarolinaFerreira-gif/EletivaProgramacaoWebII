<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<div class="container mt-5">
    <h2>Divisão</h2>
    <form action="/resultado-exercicio4" method="get">
        @csrf
        <div class="mb-3">
            <label for="valor-1" class="form-label">Valor 1:</label>
            <input type="number" class="form-control" name="valor-1" required>
        </div>
        <div class="mb-3">
            <label for="valor-2" class="form-label">Valor 2:</label>
            <input type="number" class="form-control" name="valor-2" required>
        </div>
        <button type="submit" class="btn btn-primary">Dividir</button>
    </form>
</div>
</body>
</html>