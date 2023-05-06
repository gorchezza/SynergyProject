<header>
    <div class="container">
        <div class="header-line">
            <div class="logo">
                <h1><a href="{{ route('user.index') }}">UNIA</a></h1>
            </div>
            <nav>
                <ul class="nav-buttons">
                    <li class="nav-user-name"><h3><a class="user-btn" href="{{ route('user.private') }}">{{ $first_name }}</a></h3></li>
                    <li><h3><a class="logout-btn" href="{{ route('user.logout') }}">Выход</a></h3></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
@yield('header')

