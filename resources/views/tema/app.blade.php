<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>@yield('title')</title>
</head>
<body class="bg-light">
    <div class="container shadow bg-white">
        <div class="row">
            <div class="col-sm-12">
                <h1>Prueba Tecnica</h1>
            </div>

            <div class="col-sm-12">
                <a href="{{ route('roles.create') }}" class="btn btn-link">Crear nuevo rol</a>
                <a href="{{ route('roles.index') }}" class="btn btn-link">Listar roles</a>
                <a href="{{ route('user.create') }}" class="btn btn-link">Crear nuevo usuario</a>
                <a href="{{ route('user.index') }}" class="btn btn-link">Listar usuarios</a>
            </div>

            <div class="col-sm-12">
                @yield('contenido')
            </div>
        </div>
    </div>
</body>
</html>