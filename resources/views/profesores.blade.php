<!-- resources/views/profesor/show.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Profesor</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Detalles del Profesor</h1>
    <p><strong>Nombre:</strong> {{ $profesor->nombre }}</p>
    <p><strong>Asignatura:</strong> {{ $profesor->asignatura }}</p>
    <a href="{{ url('/profesores') }}">Volver a la lista de profesores</a>
</body>
</html>
