<aside class="sidebar">
    <nav>
        <ul>
            <li><a href="{{ url('/') }}">Página de la institución</a></li>
            <li><a href="{{ route('cursos.index') }}">Cursos</a></li>
            <li><a href="{{ url('/organizaciones') }}">Organizaciones</a></li>
            <li><a href="{{ url('/calendario') }}">Calendario</a></li>
            <li><a href="{{ url('/mensajes') }}">Mensajes</a></li>
            <li><a href="{{ url('/calificaciones') }}">Calificaciones</a></li>
            <li><a href="{{ url('/herramientas') }}">Herramientas</a></li>
            <li><a href="{{ url('/cerrar-sesion') }}">Cerrar sesión</a></li>
        </ul>
    </nav>
</aside>

<style>
    .sidebar {
        background-color: #2d2d2d;
        color: white;
        width: 200px;
        padding: 10px;
        position: fixed;
        height: 100%;
    }

    .sidebar ul {
        list-style-type: none;
        padding: 0;
    }

    .sidebar ul li a {
        color: white;
        text-decoration: none;
        padding: 10px;
        display: block;
    }

    .sidebar ul li a:hover {
        background-color: #444;
    }
</style>
