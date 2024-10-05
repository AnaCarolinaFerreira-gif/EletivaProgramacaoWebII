<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 14</title>
</head>
<body>
<div class="container mt-5">
<h1>Exercício 14: Converter Milhas</h1>
    <form class="row" action="/resultado-exercicio14" method="POST">
    @csrf
    @method('GET')
    <div class="col mb-3">
        <label class="form-label" for="milhas">Milhas:</label>
        <input class="form-label" type="number" name="milhas" required>
</div>
        <button type="submit">Converter</button>
    </form>
</div>
</body>
</html>