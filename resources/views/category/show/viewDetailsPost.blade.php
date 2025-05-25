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

        {{-- Detalle del post --}}
        <div id="post-detail" class="bg-white dark:bg-gray-800 p-8 rounded-3xl shadow-lg mb-8">
            <h2 class="text-3xl font-bold text-blue-700 mb-4">{{ $posts->title }}</h2>
            <p class="text-sm text-gray-500 dark:text-gray-300 mb-2">
                🖋 Publicado por: <span class="font-medium text-gray-800 dark:text-white">{{ $posts->poster }}</span>
            </p>
            <p class="text-sm text-gray-500 dark:text-gray-300 mb-4">
                ✔️ Estado:
                <span class="{{ $posts->Habilitated ? 'text-green-600' : 'text-red-600' }} font-semibold">
                    {{ $posts->Habilitated ? 'Habilitado' : 'Deshabilitado' }}
                </span>
            </p>
            <div class="text-lg text-gray-700 dark:text-gray-200 mb-6">
                {{ $posts->content }}
            </div>
            <div class="flex justify-end space-x-4">
                <button onclick="toggleEdit()" class="px-5 py-2 bg-yellow-400 text-white rounded-lg shadow hover:bg-yellow-500 transition duration-200">
                    ✏️ Editar
                </button>
                <a href="{{ url('/category') }}"
                   class="px-5 py-2 bg-gray-300 text-gray-800 rounded-lg hover:bg-gray-400 transition duration-200">
                    🔙 Volver
                </a>
            </div>
        </div>

        {{-- Formulario para editar (oculto por defecto) --}}
        <form id="edit-form" action="{{ url('/category/edit/'.$posts->id) }}" method="POST"
              class="bg-white dark:bg-gray-800 p-8 rounded-3xl shadow-lg hidden">
            @csrf
            @method('PUT')

            <label class="block mb-2 font-semibold text-blue-700 dark:text-blue-300" for="title">Título:</label>
            <input type="text" id="title" name="title" value="{{ old('title', $posts->title) }}"
                   class="w-full mb-4 p-2 border rounded bg-gray-50 dark:bg-gray-700 dark:text-white" />

            <label class="block mb-2 font-semibold text-blue-700 dark:text-blue-300" for="poster">Publicado por:</label>
            <input type="text" id="poster" name="poster" value="{{ old('poster', $posts->poster) }}"
                   class="w-full mb-4 p-2 border rounded bg-gray-50 dark:bg-gray-700 dark:text-white" />

            <label class="block mb-2 font-semibold text-blue-700 dark:text-blue-300" for="habilitated">Estado:</label>
            <select id="habilitated" name="habilitated"
                    class="w-full mb-4 p-2 border rounded bg-gray-50 dark:bg-gray-700 dark:text-white">
                <option value="1" {{ $posts->Habilitated ? 'selected' : '' }}>Habilitado</option>
                <option value="0" {{ !$posts->Habilitated ? 'selected' : '' }}>Deshabilitado</option>
            </select>

            <label class="block mb-2 font-semibold text-blue-700 dark:text-blue-300" for="content">Contenido:</label>
            <textarea id="content" name="content" rows="6"
                      class="w-full mb-6 p-2 border rounded bg-gray-50 dark:bg-gray-700 dark:text-white">{{ old('content', $posts->content) }}</textarea>

            <div class="flex justify-end space-x-4">
                <button type="submit" class="px-5 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition duration-200">
                    💾 Guardar Cambios
                </button>
                <a href="{{ url('/category') }}" class="px-5 py-2 bg-gray-300 text-gray-800 rounded-lg hover:bg-gray-400 transition duration-200">
                    🔙 Volver
                </a>
            </div>
        </form>

    </div>

    <script>
        function toggleEdit() {
            document.getElementById('post-detail').classList.add('hidden');
            document.getElementById('edit-form').classList.remove('hidden');
        }
    </script>

</x-app-layout>
