<!DOCTYPE html>
<html lang="es">
<head>
    @include('admin.layout.header')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('admin.layout.inter_header') {{-- Menú principal --}}

    <main>
        @yield('contenidoAdmin') {{-- Aquí se inyectará el contenido de cada página --}} 
    </main>

    @include('admin.layout.inter_footer') {{-- Pie parcial con info de contacto, etc. --}}
    @include('admin.layout.footer')       {{-- Scripts, copyright --}}
</body>
</html>
