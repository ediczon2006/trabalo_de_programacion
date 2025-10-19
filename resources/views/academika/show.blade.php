<!-- resources/views/academika/show.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AcademiKa - Detalles del Curso</title>
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
                <h1>{{ $curso['nombre'] }}</h1>
            </header>

            <section class="course-detail">
                <img src="{{ $curso['imagen'] }}" alt="{{ $curso['nombre'] }}">
                <div class="course-info">
                    <p><strong>Instructor: </strong>{{ $curso['instructor'] }}</p>
                    <p><strong>Estado: </strong>{{ $curso['estado'] }}</p>
                    <p><strong>Fecha: </strong>{{ $curso['fecha'] }}</p>
                    <p><strong>Descripción: </strong>{{ $curso['descripcion'] }}</p>
                    <a href="#" class="enroll-btn">Inscribirse</a>
                </div>
            </section>
        </main>
    </div>

    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
