<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #1e3c72, #2a5298);
            min-height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .navbar {
            background: #1e3c72;
            padding: 1rem;
            display: flex;
            justify-content: center;
            gap: 2rem;
            width: 100%;
        }

        .navbar a {
            color: white;
            font-weight: bold;
            text-decoration: none;
            font-size: 1rem;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            transition: background 0.3s, color 0.3s;
        }

        .navbar a:hover {
            background: #2a5298;
            color: #ffdd57;
        }

        .welcome-container {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
            padding: 2rem;
            margin-top: 3rem;
            text-align: center;
            width: 400px;
        }

        .welcome-container h1 {
            color: #1e3c72;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/home') }}">Inicio</a>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @else
                <a href="{{ route('login') }}">Login</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        @endif
    </nav>

    <div class="welcome-container">
        <h1>Bienvenido a mi aplicación</h1>
        <p>Selecciona una opción en la barra de navegación para continuar.</p>
    </div>
</body>
</html>
