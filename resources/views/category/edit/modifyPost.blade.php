<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>list categories</title>
        
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
        
        @endif
    </head>
<body>
    @include('layout.nav')

    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6 text-center">📚 Se modifico a :</h1>

        <div class="grid gap-6">
                <div class="bg-white p-6 rounded-2xl shadow-md hover:shadow-xl transition duration-300">
                    <h2 class="text-xl font-semibold text-blue-600 mb-2">{{ $posts->title }}</h2>
                    <p class="text-sm text-gray-500 mb-1">🖋 Publicado por: <span class="font-medium">{{ $posts->poster }}</span></p>
                    <p class="text-sm text-gray-500 mb-3">✔️ Habilitado: 
                        <span class="{{ $posts->Habilitated ? 'text-green-600' : 'text-red-600' }}">
                            {{ $posts->Habilitated ? 'Sí' : 'No' }}
                        </span>
                    </p>
                    <p class="text-gray-700">{{ $posts->content }}</p>
                </div>
        </div>
    </div>
    
</body>
</html>