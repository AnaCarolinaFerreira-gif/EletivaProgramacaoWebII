<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 12</title>
</head>
<body>
<div class="container mt-5">
<h1>Exercício 12: Calcular Potência</h1>
    <form class="row" action="/resultado-exercicio12" method="POST">
    @csrf
    @method('GET')
    <div class="col mb-3">
        <label class="form-label"for="base">Base:</label>
        <input class="form-label" type="number" name="base" required>
</div>
        <div class="col mb-3">
        <label class="form-label" for="expoente">Expoente:</label>
        <input class="form-label" type="number" name="expoente" required>
</div>
        <button type="submit">Calcular</button>
    </form>
</div>
</body>
</html>