<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11</title>
</head>
<body>
<div class="container mt-5">
    <h1>Exercício 11: Calcular Perímetro do Círculo</h1>
    <form class="row" action="/resultado-exercicio11" method="POST">
    @csrf
    @method('GET')
    <div class="col mb-3">
        <label class="form-label" for="raio">Raio:</label>
        <input class="form-label" type="number" name="raio" required>
</div>
        <button type="submit">Calcular</button>
    </form>
</div>
</body>
</html>