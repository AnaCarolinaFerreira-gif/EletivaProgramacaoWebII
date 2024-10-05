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
    <form class="row" action="/resultado-exercicio15" method="POST">
    @csrf
    @method('GET')
    <div class="col mb-3">
        <label class="form-label"for="peso">Peso (kg):</label>
        <input class="form-label" type="number" name="peso" required>
</div>
<div class="col mb-3">
        <label class="form-label"for="altura">Altura (m):</label>
        <input class="form-label" type="number" name="altura" step="0.01" required>
</div>
        <button type="submit">Calcular IMC</button>
    </form>
</div>
</body>
</html>