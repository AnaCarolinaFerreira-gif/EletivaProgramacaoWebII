
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada de clientes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
html, body {
            height: 100%;
        }
body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

.content {
            flex: 1;
        }

     footer {
            background-color: #f8f9fa;
            color: #333;
            text-align: center;
            padding: 10px 0;
            width: 100%;
        }
</style>
</head>
<body>
    <header class="container">
        <div class="row d-flex justify-content-center align-itens-center">
            <div col-md-6>
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">  
                        <ul class="navbar-nav">
                            <li class="nav-item"> <a href="{{ route( 'clientes.index')}}">Gerenciar Clientes</a></li>
                            <li class="nav-item"><a href="{{ route( 'veiculos.index')}}">Gerenciar Veiculos</a></li>
                            <li class="nav-item"><a href="{{ route( 'vagas.index')}}">Gerenciar Vagas</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    
<div class="container content my-5">
    {{$slot}}
</div>

<footer>
    <div class="container">
        <p>&copy; 2024 Sistema de Controle de Estacionamento. Todos os direitos reservados.</p>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</body>
</html>
