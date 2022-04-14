<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('tituloPagina')</title>
</head>
<body>
    @yield('contenido')
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('dataTable')
</body>
</html>