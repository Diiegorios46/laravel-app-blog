<x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-2xl text-indigo-700 leading-tight text-center">
                📚 Detalle del Post
            </h2>
        </x-slot>

        <div class="py-10 px-4 max-w-4xl mx-auto">

            @if(session('success'))
                <div class="bg-green-100 text-green-800 p-4 rounded mb-6">
                    {{ session('success') }}
                </div>
            @endif

        </div>


        <div class="py-10 px-4 max-w-4xl mx-auto">
            {{-- Formulario para crear nuevo post --}}
            <form action="{{ url('/category/create') }}" method="POST"
                class="bg-white dark:bg-gray-800 p-8 rounded-3xl shadow-lg">
                @csrf
    
                <label class="block mb-2 font-semibold text-blue-700 dark:text-blue-300" for="title">Título:</label>
                <input type="text" id="title" name="title" value=""
                    class="w-full mb-4 p-2 border rounded bg-gray-50 dark:bg-gray-700 dark:text-white" />
    
                <label class="block mb-2 font-semibold text-blue-700 dark:text-blue-300" for="poster">Publicado por:</label>
                <input type="text" id="poster" name="poster" value=""
                    class="w-full mb-4 p-2 border rounded bg-gray-50 dark:bg-gray-700 dark:text-white" />
    
                <label class="block mb-2 font-semibold text-blue-700 dark:text-blue-300" for="habilitated">Estado:</label>
                <select id="habilitated" name="habilitated"
                        class="w-full mb-4 p-2 border rounded bg-gray-50 dark:bg-gray-700 dark:text-white">
                    <option value="1">Habilitado</option>
                    <option value="0">Deshabilitado</option>
                </select>
    
                <label class="block mb-2 font-semibold text-blue-700 dark:text-blue-300" for="content">Contenido:</label>
                <textarea id="content" name="content" rows="6"
                        class="w-full mb-6 p-2 border rounded bg-gray-50 dark:bg-gray-700 dark:text-white"></textarea>
    
                <div class="flex justify-end space-x-4">
                    <button type="submit" class="px-5 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition duration-200">
                        ➕ Crear Post
                    </button>
                    <a href="{{ url('/category') }}" class="px-5 py-2 bg-gray-300 text-gray-800 rounded-lg hover:bg-gray-400 transition duration-200">
                        🔙 Volver
                    </a>
                </div>
            </form>
        </div>

    </div>

</x-app-layout>
