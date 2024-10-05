<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 13</title>
</head>
<body>
<div class="container mt-5">
<h1>Exercício 13: Converter Centímetros</h1>
    <form class="row" action="/resultado-exercicio13" method="POST">
    @csrf
    @method('GET')
    <div class="col mb-3">
        <label class="form-label"  for="centimetros">Centímetros:</label>
        <input class="form-label" type="number" name="centimetros" required>
</div>
        <button type="submit">Converter</button>
    </form>
</div>
</body>
</html>