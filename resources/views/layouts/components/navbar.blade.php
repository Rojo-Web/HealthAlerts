<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
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
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/roles') }}">Roles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/users') }}">Usuarios</a>
                    </li>
                @endauth
            </ul>

            <!-- Opciones de usuario -->
            <ul class="navbar-nav ms-auto">
                @guest
                    <!-- Opciones para usuarios no autenticados -->
                    @if (Route::currentRouteName() == 'login')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                        </li>
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
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Cerrar sesión') }}
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