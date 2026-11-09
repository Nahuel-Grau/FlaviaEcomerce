<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Mi Ecommerce')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    {{-- ENCABEZADO --}}
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
            <div class="container">

                {{-- LOGO Y NOMBRE --}}
                <a class="navbar-brand fw-bold" href="/">
                    Mi Ecommerce
                </a>

                {{-- BOTÓN PARA CELULARES --}}
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#menuPrincipal"
                    aria-controls="menuPrincipal"
                    aria-expanded="false"
                    aria-label="Abrir menú"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>

                {{-- MENÚ --}}
                <div class="collapse navbar-collapse" id="menuPrincipal">

                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="/">Inicio</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Tienda</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Ofertas</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Contacto</a>
                        </li>
                    </ul>

                    {{-- BUSCADOR --}}
                    <form class="d-flex me-lg-3 mb-3 mb-lg-0" role="search">
                        <input
                            class="form-control"
                            type="search"
                            placeholder="Buscar productos..."
                            aria-label="Buscar productos"
                        >
                    </form>

                    {{-- ACCESO A CUENTA Y CARRITO --}}
                    <div class="d-flex gap-3 align-items-center">
                        <a href="#" class="text-decoration-none text-dark">
                            Mi cuenta
                        </a>

                        <a href="#" class="text-decoration-none text-dark">
                            Carrito
                        </a>
                    </div>

                </div>
            </div>
        </nav>
    </header>

    {{-- CONTENIDO DE CADA PÁGINA --}}
    <main>
        @yield('content')
    </main>

    {{-- PIE DE PÁGINA --}}
    <footer class="bg-dark text-white mt-5 py-4">
        <div class="container">

            <div class="row">

                <div class="col-md-6 mb-3">
                    <h5>Mi Ecommerce</h5>
                    <p class="text-white-50">
                        Encontrá los productos que estás buscando.
                    </p>
                </div>

                <div class="col-md-3 mb-3">
                    <h6>Información</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white-50 text-decoration-none">Contacto</a></li>
                        <li><a href="#" class="text-white-50 text-decoration-none">Envíos</a></li>
                        <li><a href="#" class="text-white-50 text-decoration-none">Medios de pago</a></li>
                    </ul>
                </div>

                <div class="col-md-3 mb-3">
                    <h6>Redes sociales</h6>
                    <a href="#" class="text-white-50 text-decoration-none">
                        Instagram
                    </a>
                </div>

            </div>

            <hr>

            <p class="text-center text-white-50 mb-0">
                © {{ date('Y') }} Mi Ecommerce. Todos los derechos reservados.
            </p>

        </div>
    </footer>

</body>
</html>