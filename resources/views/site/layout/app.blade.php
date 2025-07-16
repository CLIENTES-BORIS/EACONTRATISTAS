<!DOCTYPE html>
<html lang="es">
<head>
    @include('site.layout.header')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('site.layout.inter_header') {{-- Menú principal --}}

    <main>
        @yield('contenido') {{-- Aquí se inyectará el contenido de cada página --}} 
    </main>

    @include('site.layout.inter_footer') {{-- Pie parcial con info de contacto, etc. --}}
    @include('site.layout.footer')       {{-- Scripts, copyright --}}
</body>
</html>
