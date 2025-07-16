<!DOCTYPE html>
<html lang="es">
<head>
    @include('site.layout.header') 
    {{-- Incluye el head general con metas, título, etc. --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100"> 
    {{-- Un color de fondo diferente para la página de login --}}

    <main>
        @yield('contenido')
    </main>

    {{-- Opcional: Si quieres un footer específico para el login --}}
    {{-- @include('admin.layout.auth_footer') --}}
</body>
</html>