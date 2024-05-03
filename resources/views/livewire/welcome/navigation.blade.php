<nav class=" text-emerald-600 flex gap-5 text-lg ">
    @auth
        <a href="{{ url('/dashboard') }}" class="hover:text-emerald-700 transition">
            Dashboard
        </a>
    @else
        <a href="{{ route('login') }}" class="hover:text-emerald-700 transition">
            Accedi
        </a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="hover:text-emerald-700 transition">
                Registrati
            </a>
        @endif
    @endauth
</nav>
