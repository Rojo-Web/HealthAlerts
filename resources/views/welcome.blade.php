<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            position: relative; /* Asegura que el body ocupe todo el viewport */
            margin: 0; /* Elimina el margen predeterminado del body */
            padding-top: 56px; /* Altura del navbar */
        }

        #background {
            position: fixed; /* Permite que la imagen de fondo se mantenga fija */
            top: 0; /* Posiciona la imagen de fondo en la parte superior */
            left: 0; /* Posiciona la imagen de fondo en la parte izquierda */
            width: 100%; /* Ajusta el ancho de la imagen al 100% del viewport */
            height: 100%; /* Ajusta la altura de la imagen al 100% del viewport */
            z-index: -1; /* Coloca la imagen de fondo detrás de todo el contenido */
        }
    </style>
</head>
<body>
    <img id="background" src="{{asset('images/fondo.jpg')}}" />
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    @auth
                        <li class="nav-item">
                            <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">Iniciar Sesión</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="nav-link">Registrarme</a>
                            </li>
                        @endif
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="relative">
            <div class="relative">
                <header>
                    <main>
                        <div></div>
                    </main>
                    <footer>
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </footer>
                </header>
            </div>
        </div>
    </div>
</body>
</html>
