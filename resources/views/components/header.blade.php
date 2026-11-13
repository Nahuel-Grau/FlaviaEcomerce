
<header class="site-header">

    {{-- Barra de anuncios --}}
    <div class="announcement-bar">
        <p>ENVÍOS A TODO EL PAÍS | DESCUBRÍ NUESTRA NUEVA COLECCIÓN</p>
    </div>

    {{-- Cabecera principal --}}
    <div class="header-main">

        {{-- Menú móvil --}}
        <details class="mobile-menu">
            <summary aria-label="Abrir menú de navegación">
                <span class="menu-icon">☰</span>
            </summary>

            <nav class="mobile-navigation" aria-label="Navegación móvil">
                <a href="{{ route('home') }}">Inicio</a>
                <a href="{{ route('catalog.women') }}">Mujer</a>
                <a href="{{ route('catalog.men') }}">Hombre</a>
                <a href="{{ route('catalog.new') }}">Novedades</a>
                <a href="{{ route('catalog.offers') }}">Ofertas</a>
            </nav>
        </details>

        {{-- Logo --}}
        <a href="{{ route('home') }}" class="store-logo">
            FLAVIA<span>.</span>
        </a>

        {{-- Buscador --}}
        <form action="{{ url('/productos') }}"
              method="GET"
              class="header-search"
              role="search">

            <input
                type="search"
                name="q"
                placeholder="¿Qué estás buscando?"
                aria-label="Buscar productos"
                maxlength="100"
            >

            <button type="submit" aria-label="Buscar">
                <span>⌕</span>
            </button>
        </form>

        {{-- Acciones del usuario --}}
        <div class="header-actions">

            <a href="{{ url('/cuenta') }}" class="header-action">
                <span class="action-icon">♙</span>
                <span class="action-label">Mi cuenta</span>
            </a>

            <a href="{{ url('/carrito') }}" class="header-action">
                <span class="action-icon">♧</span>
                <span class="action-label">Mi carrito</span>
            </a>

        </div>

    </div>

    {{-- Navegación de escritorio --}}
    <nav class="desktop-navigation" aria-label="Navegación principal">
        <a href="{{ route('home') }}">Inicio</a>
        <a href="{{ route('catalog.women') }}">Mujer</a>
        <a href="{{ route('catalog.men') }}">Hombre</a>
        <a href="{{ route('catalog.new') }}">Novedades</a>
        <a href="{{ route('catalog.offers') }}">Ofertas</a>
    </nav>

</header>
