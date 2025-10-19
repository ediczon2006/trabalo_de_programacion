<!-- resources/views/profesor/index.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesores</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Lista de Profesores</h1>
    <div class="professor-list">
        @foreach ($profesores as $profesor)
            <div class="professor-card">
                <h3>{{ $profesor->nombre }}</h3>
                <p>{{ $profesor->asignatura }}</p>
                <a href="{{ url('/profesores/'.$profesor->id) }}">Ver Detalles</a>
            </div>
        @endforeach
    </div>
</body>
</html>
