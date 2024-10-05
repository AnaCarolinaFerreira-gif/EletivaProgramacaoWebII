<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 16</title>
</head>
<body>
<div class="container mt-5">
<h1>Exercício 16: Calcular Desconto</h1>
    <form class="row" action="/resultado-exercicio16" method="POST">
    @csrf
    @method('GET')
    <div class="col mb-3">
        <label class="form-label"for="preco">Preço Original:</label>
        <input class="form-label" type="number" name="preco" required>
</div>
<div class="col mb-3">
        <label class="form-label"for="desconto">Desconto (%):</label>
        <input class="form-label"type="number" name="desconto" required>
</div>
        <button type="submit">Calcular Desconto</button>
    </form>
</div>
</body>
</html>