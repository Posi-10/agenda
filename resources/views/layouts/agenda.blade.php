<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('tituloPagina')</title>
</head>
<body>
    <div class="container-fluid p-0 position-sticky fixed-top">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="{{route('inicio')}}"><i class="fa-solid fa-address-book fa-2x"></i></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="{{route('inicio')}}"><i class="fa-solid fa-house-user fa-lg me-2"></i>Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('categorias.index')}}"><i class="fa-solid fa-rectangle-list fa-lg me-2"></i>Categorias</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa-solid fa-id-card fa-lg me-2"></i>Contactos</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    @yield('contenido')
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('dataTable')
</body>
</html>