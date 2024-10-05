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
    <form action="/resultado-exercicio10" method="POST">
    @csrf
        @method=GET
        <label for="lado1">Lado 1:</label>
        <input type="number" name="lado1" required>
        <label for="lado2">Lado 2:</label>
        <input type="number" name="lado2" required>
        <label for="lado3">Lado 3:</label>
        <input type="number" name="lado3" required>
        <button type="submit">Calcular</button>
    </form>
</div>
</body>
</html>