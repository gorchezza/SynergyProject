<header>
    <div class="container">
        <div class="header-line">
            <div class="logo">
                <h1><a href="{{ route('user.index') }}">UNIA</a></h1>
            </div>
            <nav>
                <ul class="nav-buttons">
                    <li class="nav-user-name"><h2><a href="#"><></a></h2></li>
                    <li><h2><a href="{{ route('user.logout') }}">Выход</a></h2></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
@yield('header')

