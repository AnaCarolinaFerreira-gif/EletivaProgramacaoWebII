<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10</title>
</head>
<body>
<div class="container mt-5">
    <h1>Exercício 10: Calcular Perímetro do Triângulo</h1>
    <form class="row" action="/resultado-exercicio10" method="POST">
    @csrf
        @method=GET
        <div class="col mb-3">
        <label class="form-label" for="lado1">Lado 1:</label>
        <input class="form-label" type="number" name="lado1" required>
    </div>
    <div class="col mb-3">
        <label class="form-label" for="lado2">Lado 2:</label>
        <input class="form-label" type="number" name="lado2" required>
        </div>
        <div class="col mb-3">
        <label class="form-label" for="lado3">Lado 3:</label>
        <input class="form-label" type="number" name="lado3" required>
</div>
        <button type="submit">Calcular</button>
    </form>
</div>
</body>
</html>