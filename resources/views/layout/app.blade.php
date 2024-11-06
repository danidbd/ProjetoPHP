<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Empresas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Gestão de Empresas</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('grupos.index') }}">Grupos Econômicos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('bandeiras.index') }}">Bandeiras</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('unidades.index') }}">Unidades</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('colaboradores.index') }}">Colaboradores</a></li>
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
