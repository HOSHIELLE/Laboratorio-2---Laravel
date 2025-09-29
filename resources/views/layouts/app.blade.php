<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Styles & Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* NAVBAR */
        .navbar {
            background: #1e3c72;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 2rem;
            padding: 1rem;
        }
        .navbar .navbar-brand,
        .navbar .nav-link {
            color: white;
            font-weight: bold;
            text-decoration: none;
            font-size: 1rem;
            padding: .5rem 1rem;
            border-radius: 6px;
            transition: background .3s, color .3s;
        }
        .navbar .navbar-brand:hover,
        .navbar .nav-link:hover {
            background: #2a5298;
            color: #ffdd57;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar">
            <ul style="display:flex; gap:1.5rem; list-style:none; margin:0; padding:0;">
                <li><a class="navbar-brand" href="{{ url('/') }}">Laravel</a></li>
                @guest
                    @if (Route::has('login'))
                        <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    @endif
                    @if (Route::has('register'))
                        <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                    @endif
                @else
                    <li><a class="nav-link" href="#">{{ Auth::user()->name }}</a></li>
                    <li>
                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Cerrar sesión
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
