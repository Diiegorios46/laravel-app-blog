<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
            📚 Lista de Blogs
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach($posts as $post)
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg hover:shadow-2xl transition duration-300 border border-gray-100 dark:border-gray-700">
                        <h2 class="text-2xl font-bold text-indigo-600 mb-2">{{ $post->title }}</h2>

                        <p class="text-sm text-gray-500 dark:text-gray-300 mb-1">
                            🖋 Publicado por:
                            <span class="font-medium text-gray-700 dark:text-white">{{ $post->poster }}</span>
                        </p>

                        <p class="text-sm text-gray-500 dark:text-gray-300 mb-3">
                            ✔️ Habilitado:
                            <span class="{{ $post->Habilitated ? 'text-green-600' : 'text-red-600' }} font-semibold">
                                {{ $post->Habilitated ? 'Sí' : 'No' }}
                            </span>
                        </p>

                        <p class="text-gray-700 dark:text-gray-200 mb-4">
                            {{ \Illuminate\Support\Str::limit($post->content, 120, '...') }}
                        </p>

                        <div class="flex flex-wrap justify-between">

                            <form action="{{ url("/category/delete/".$post->id) }}" method="POST" onsubmit="return confirm('¿Seguro que querés eliminar este post?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">
                                    🗑 Eliminar
                                </button>
                            </form>
    
                            <div class="text-right">
                                <a href="{{ url('/category/show/' . $post->id) }}"
                                   class="inline-block px-4 py-2 bg-indigo-600 text-white text-sm font-semibold rounded-lg shadow hover:bg-indigo-700 transition duration-200">
                                    🔎 Ver detalles
                                </a>
                            </div>
                        </div>

                    </div>

                    @endforeach

                    <div>
                        <a href="{{ url('/category/create') }}"
                            class=" bg-green-600 text-white text-sm font-semibold rounded-lg shadow hover:bg-green-700 transition duration-200 flex justify-center items-center h-full">
                                ➕ Nuevo post
                        </a>
                    </div>
            </div>
            
        </div>
    </div>
</x-app-layout>
