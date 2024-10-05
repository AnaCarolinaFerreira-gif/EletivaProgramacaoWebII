<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 18</title>
</head>
<body>
<div class="container mt-5">
<h1>Exercício 18: Calcular Juros Compostos</h1>
    <form class="row" action="/resultado-exercicio18" method="POST">
    @csrf
        @method('GET')
        <div class="col mb-3">
        <label class="form-label" for="capital">Capital:</label>
        <input class="form-label" type="number" name="capital" required>
</div>
<div class="col mb-3">
        <label class="form-label" for="taxa">Taxa (%):</label>
        <input class="form-label" type="number" name="taxa" required>
</div>
<div class="col mb-3">
        <label class="form-label" for="tempo">Tempo (anos):</label>
        <input class="form-label" type="number" name="tempo" required>
</div>
        <button type="submit">Calcular Juros Compostos</button>
    </form>
</div>
</body>
</html>