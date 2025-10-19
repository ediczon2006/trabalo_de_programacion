<!-- resources/views/academika/index.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AcademiKa - Cursos Secundarios</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <!-- Barra lateral -->
        <nav class="sidebar">
            <div class="logo">
                <h2>AcademiKa</h2>
            </div>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Cursos</a></li>
                <li><a href="#">Calendario</a></li>
                <li><a href="#">Mensajes</a></li>
                <li><a href="#">Cerrar sesión</a></li>
            </ul>
        </nav>

        <!-- Contenido Principal -->
        <main class="main-content">
            <header>
                <h1>Cursos de Secundaria</h1>
            </header>

            <section class="course-list">
                @foreach($cursos as $curso)
                <div class="course-item">
                    <img src="{{ $curso['imagen'] }}" alt="{{ $curso['nombre'] }}">
                    <div class="course-info">
                        <h3>{{ $curso['nombre'] }}</h3>
                        <p><strong>{{ $curso['estado'] }}</strong></p>
                        <p>{{ $curso['fecha'] }}</p>
                        <p>Instructor: {{ $curso['instructor'] }}</p>
                        <a href="{{ url('/curso/'.$curso['id']) }}" class="view-btn">Ver más</a> <!-- Redirige al detalle del curso -->
                    </div>
                </div>
                @endforeach
            </section>
        </main>
    </div>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
