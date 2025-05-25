<nav class="bg-blue-600 text-white px-6 py-4 shadow-lg">
    <div class="container mx-auto flex justify-between items-center">
        <div class="text-xl font-semibold">
            <a href="{{ url('/') }}">Blogger</a>
        </div>
        <div class="space-x-4">
            @if (Auth::check())
                <a href="{{ url('/dashboard') }}" class="hover:underline hover:text-blue-200 transition">Dashboard</a>
                <a href="{{ url('/profile') }}" class="hover:underline hover:text-blue-200 transition">Perfil</a>

                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="hover:underline hover:text-blue-200 transition">Logout</button>
                </form>
            @else
                <a href="{{ route('register') }}" class="hover:underline hover:text-blue-200 transition">Register</a>
                <a href="{{ route('login') }}" class="hover:underline hover:text-blue-200 transition">Login</a>
            @endif
            
            @if (Auth::check())
            <a href="{{ url('/category') }}" class="hover:underline hover:text-blue-200 transition">List Categories</a>
            @endif

        </div>
    </div>
</nav>
