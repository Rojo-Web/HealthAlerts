<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{asset('images/logo.png')}}" alt="" class="m-2" height="50px">
            {{ config('app.name', 'Laravel') }}
        </a>

        <!-- Botón de hamburguesa para dispositivos pequeños -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Opciones de navegación -->
            <ul class="navbar-nav me-auto">
                @auth
                <!-- Opciones para usuarios autenticados -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/citasPendientes') }}">Citas pendientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/proximasCitas') }}">Proximas Citas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/pacientes') }}">Pacientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/registros') }}">Registros</a>
                </li>
                @if (Auth::check())
                @if (Auth::user()->rol_id == "Admin")
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/roles') }}">Roles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/users') }}">Usuarios</a>
                </li>
                @endif
                @endif
                @endauth
            </ul>

            <!-- Opciones de usuario -->
            <ul class="navbar-nav ms-auto">
                @guest
                <!-- Opciones para usuarios no autenticados -->
                @if (Route::currentRouteName() == 'login')
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                </li> --}}
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                </li>
                @endif
                @else
                <!-- Opciones para usuarios autenticados -->
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        {{-- <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Ajustes') }}
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Backup') }}
                        </a> --}}
                        <a class="dropdown-item" href="{{ route('reportes') }}">
                            {{ __('Reportes') }}
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Cerrar Sesión') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
