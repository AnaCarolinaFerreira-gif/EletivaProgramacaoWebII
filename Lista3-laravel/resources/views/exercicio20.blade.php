<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 20</title>
</head>
<body>
<div class="container mt-5">
    <h2>Exercício 20: Calcular Velocidade Media</h2>
    <form class="row" action="/resultado-exercicio20" method="POST">
        @csrf
        @method('GET')
        <div class="col mb-4">
        <input type="text" name="distancia" id="distancia" class="form-control">
        <label for="distancia" class="form-label">Distancia</label>
        </div>
        <div class="col mb-4">
         <input type="text" name="tempo" id="tempo" class="form-control">
            <label for="tempo" class="form-label">Tempo</label>
        </div>
        <button type="submit" class="btn btn-primary">Calcular Área</button>
    </form>
</div>
</body>
</html>