<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
    <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <h2>PcGeek</h2>
    </a>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/" class="nav-link">Главная</a></li>
        <li><a href="/forum" class="nav-link">Форум</a></li>
        @auth
            <li><a href="/profile" class="nav-link">Личный кабинет</a></li>
        @endauth
        {{-- <li><a href="/config" class="nav-link">Конструктор</a></li> --}}

    </ul>

    <ul class="nav col-md-auto d-flex text-end">
        <li>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </li>
        @guest
            <li><a href="#" data-bs-toggle="modal" data-bs-target="#signup" class="nav-link">Регистрация</a>
            </li>
            <li><a href="#" data-bs-toggle="modal" data-bs-target="#signin" class="nav-link">Войти</a></li>
        @endguest
        @auth
            <li><a href="/logout" class="nav-link">Выход</a></li>
        @endauth
    </ul>
</header>
