<header class="navbar navbar-expand-md navbar-dark bg-primary shadow-sm">
    <nav class="container-xxl flex-wrap flex-md-nowrap mx-2">
        <a class="navbar-brand" href="/">
            <i class="bi bi-x-diamond-fill"></i>
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Landing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('home') ? 'active' : '' }}" href="/home">Homepage</a>
                </li>
            </ul>
            <div class="d-flex navbar-nav">
                <a href="/login"
                    class="btn btn-info {{ request()->is('login') || session('user') ? 'd-none' : '' }}">Login</a>
                <a href="/register"
                    class="btn btn-secondary text-white ms-1 {{ request()->is('register') || session('user') ? 'd-none' : '' }}">Register</a>
                {{-- if session exist show text "helo "name" --}}
                <div class="nav-item">
                    <span class="nav-link text-white me-2 {{ !session('user') ? 'd-none' : '' }}">Hello,
                        {{ session('user.name') }}!</span>
                </div>
                <a href="/logout" class="btn btn-danger text-white {{ !session('user') ? 'd-none' : '' }}">Logout</a>
            </div>
        </div>
    </nav>
</header>
