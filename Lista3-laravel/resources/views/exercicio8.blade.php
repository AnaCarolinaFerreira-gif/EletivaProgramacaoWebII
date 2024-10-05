<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8</title>
</head>
<body>
<div class="container mt-5">
    <h2>Exercício 8: alcular Área do Retângulo</h2>
    <form action="/resultado-exercicio8" method="get">
        @csrf
        <div class="mb-3">
            <label for="largura" class="form-label">Largura:</label>
            <input type="number" class="form-control" name="largura" required>
        </div>
        <div class="mb-3">
            <label for="altura" class="form-label">Altura:</label>
            <input type="number" class="form-control" name="altura" required>
        </div>
        <button type="submit" class="btn btn-primary">Calcular Área</button>
    </form>
</div>
</body>
</html>