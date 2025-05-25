<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a Blogger</title>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="bg-gray-100 text-gray-800">

    @include('layout.nav')

    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-blue-600 to-indigo-700 text-white py-20 min-h-[90vh]">
        <div class="container mx-auto text-center px-6">
            <h1 class="text-5xl font-bold mb-6">Bienvenido a <span class="text-yellow-300">Blogger</span></h1>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Tu espacio personal para compartir ideas, historias y conocimientos con el mundo.</p>
            
            @guest
                <div class="space-x-4">
                    <a href="{{ route('register') }}" class="bg-yellow-300 text-blue-900 font-semibold px-6 py-3 rounded-xl hover:bg-yellow-400 transition">Comenzar</a>
                    <a href="{{ route('login') }}" class="bg-white text-blue-900 font-semibold px-6 py-3 rounded-xl hover:bg-gray-200 transition">Iniciar Sesión</a>
                </div>
            @else
                <a href="{{ url('/dashboard') }}" class="bg-white text-blue-900 font-semibold px-6 py-3 rounded-xl hover:bg-gray-200 transition">Ir al Dashboard</a>
            @endguest
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-700 text-white py-6 text-center">
        <p>&copy; {{ date('Y') }} Blogger. Todos los derechos reservados.</p>
    </footer>

</body>
</html>
