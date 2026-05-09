<nav class="gs-navbar">

    <style>
        .gs-navbar {
            background: #ffffff;
            border-bottom: 1px solid #e5e5e5;
            padding: 0 20px;
        }

        .gs-container {
            max-width: 1200px;
            margin: auto;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        /* Logo 
        .gs-logo {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }

        .gs-logo img {
            height: 40px;
        }

        .gs-logo span {
            font-size: 1.3rem;
            font-weight: bold;
            color: #111;
        }

        /*.gs-logo span strong {
            color: #c0392b;
        }

        /* Navegación */
        .gs-links {
            display: flex;
            align-items: center;
            gap: 18px;
            flex-wrap: wrap;
        }

        .gs-links a {
            text-decoration: none;
            color: #444;
            font-size: 0.95rem;
            font-weight: 600;
        }

        .gs-links a:hover {
            color: #c0392b;
        }

        .gs-links a.active {
            color: #c0392b;
        }

        /* Botones */
        .gs-auth {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .gs-btn {
            padding: 7px 16px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 600;
        }

        .gs-btn-login {
            border: 1px solid #ccc;
            color: #333;
            background: white;
        }

        .gs-btn-register {
            background: #c0392b;
            color: white;
            border: 1px solid #c0392b;
        }

        .gs-user {
            font-size: 0.9rem;
            font-weight: 600;
            color: #333;
        }

        @media (max-width: 768px) {
            .gs-container {
                flex-direction: column;
                height: auto;
                padding: 15px 0;
            }

            .gs-links {
                justify-content: center;
            }

            .gs-auth {
                justify-content: center;
            }
        }
    </style>

    <div class="gs-container">

        {{-- Logo 
        <a href="{{ route('inicio') }}" class="gs-logo">
            <img src="{{ asset('fotos/logo.png') }}" alt="Golden Shoes">
            <span>Golden <strong>Shoes</strong></span>
        </a>--}}

        {{-- Links --}}
        <div class="gs-links">
            <a href="{{ route('inicio') }}" class="{{ request()->routeIs('inicio') ? 'active' : '' }}">Inicio</a>

            <a href="{{ route('formales') }}" class="{{ request()->routeIs('formales') ? 'active' : '' }}">
                Formales
            </a>

            <a href="{{ route('deportivos') }}" class="{{ request()->routeIs('deportivos') ? 'active' : '' }}">
                Deportivos
            </a>

            <a href="{{ route('accis') }}" class="{{ request()->routeIs('accis') ? 'active' : '' }}">
                Urbanos
            </a>

            <a href="{{ route('zapatos') }}" class="{{ request()->routeIs('zapatos') ? 'active' : '' }}">
                Productos
            </a>

            <a href="{{ route('contacto') }}" class="{{ request()->routeIs('contacto') ? 'active' : '' }}">
                Contacto
            </a>

            <a href="{{ route('nosotros') }}" class="{{ request()->routeIs('nosotros') ? 'active' : '' }}">
                Nosotros
            </a>
        </div>

        {{-- Auth --}}
        <div class="gs-auth">

            @guest
                <a href="{{ route('login') }}" class="gs-btn gs-btn-login">
                    Iniciar sesión
                </a>

                <a href="{{ route('register') }}" class="gs-btn gs-btn-register">
                    Registrarse
                </a>
            @endguest

            @auth
                <span class="gs-user">
                    {{ Auth::user()->name }}
                </span>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="gs-btn gs-btn-register">
                        Cerrar sesión
                    </button>
                </form>
            @endauth

        </div>

    </div>

</nav>