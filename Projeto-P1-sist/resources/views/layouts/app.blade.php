<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada de clientes</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
    <header>
        <h1>Entarada de clientes</h1>
        <nav>
            <ul>
                <li><a href="{{ route( 'clientes.index')}}">Clientes</a></li>
                <li><a href="{{ route( 'clientes.create')}}">Novo Cliente</a></li>
            </ul>
        </nav>
    </header>


    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Entrada de clientes.</p>
    </footer>
</body>
</html>