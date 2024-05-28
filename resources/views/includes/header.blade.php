<header>
    <div class="logo">
        <a href="">
            <img src="" alt="">
        </a>
    </div>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Главная</a></li>
            <li><a href="{{ route('posts') }}">Посты</a></li>
            <li><a href="">Тренировка</a></li>
            <li><a href="">Снаряжение</a></li>
        </ul>
    </nav>
    <div class="user" data-auth="{{ auth()->check() ? 'true' : 'false' }}">
        <a href="#" class="dashboard-button">
            <img class="logotipe" src="" alt="">
            <span>Гордиенко К.А.</span>
        </a>
        <a href="#" class="login-button">Войти</a>
    </div>
</header>
