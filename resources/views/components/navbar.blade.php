<nav class="navbar">
    <div class="navbar-inner">

        <span class="brand">📖 Readify</span>

        {{-- Menu hanya muncul kalau sudah login (ada username) --}}
        @isset($username)
            <div class="nav-links">
                <a href="{{ route('dashboard', ['username' => $username]) }}">Dashboard</a>
                <a href="{{ route('profile', ['username' => $username]) }}">Profile</a>
                <a href="{{ route('pengelolaan', ['username' => $username]) }}">Pengelolaan Buku</a>
                <a href="{{ route('login') }}" class="logout">Logout</a>
            </div>
        @endisset

    </div>
</nav>