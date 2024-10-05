<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9</title>
</head>
<body>
<div class="container mt-5">
    <h2>Exercício 9: Calcular Área do Círculo</h2>
    <form class="row" action="/resultado-exercicio9" method="POST">
        @csrf
        @method('GET')
        <div class="col mb-3">
            <label for="raio" class="form-label">Raio:</label>
            <input type="number" class="form-control" name="raio" required>
        </div>
        <button type="submit" class="btn btn-primary">Calcular Área</button>
    </form>
</div>
</body>
</html>