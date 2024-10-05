<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 19</title>
</head>
<body>
<div class="container mt-5">
    <h2>Exercício 19: Conversor de Dia </h2>
    <form class="row" action="/resultado-exercicio9" method="POST">
        @csrf
        @method('GET')
        <div class="col mb-4">
            <input type="text" name="dia" id="dia" class="form-control">
            <label for="dia" class="form-label">Dias</label>
        </div>
        <button type="submit" class="btn btn-primary">Calcular Área</button>
    </form>
</div>
</body>
</html>