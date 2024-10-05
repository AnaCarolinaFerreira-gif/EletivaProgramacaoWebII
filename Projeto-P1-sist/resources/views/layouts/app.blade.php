<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada de clientes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    <header class="container">
        <h1>Entarada de clientes</h1>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">  
                <ul class="navbar-nav">
                    <li class="nav-item"> <a href="{{ route( 'clientes.index')}}">Clientes</a></li>
                    <li class="nav-item"><a href="{{ route( 'clientes.create')}}">Novo Cliente</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer class="continer-md bt-4 bd-black">
        <p style="color: fff">&copy; {{ date('Y') }} Entrada de clientes.</p>
    </footer>
</body>
</html>