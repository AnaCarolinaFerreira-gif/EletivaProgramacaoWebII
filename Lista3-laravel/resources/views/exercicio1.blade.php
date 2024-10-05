<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

<div class="container mt-5">
    <h2>Somar</h2>
    <form class="row" action="/resultado-exercicio1" method="POST">
        @csrf
        @method('GET')
        <div class="col mb-3">
            <label for="valor-1" class="form-label">Valor 1:</label>
            <input type="number" class="form-control" name="valor-1" required>
        </div>
        <div class="col mb-3">
            <label for="valor-2" class="form-label">Valor 2:</label>
            <input type="number" class="form-control" name="valor-2" required>
        </div>
        <button type="submit" class="btn btn-primary">Somar</button>
    </form>
</div>
</body>
</html>