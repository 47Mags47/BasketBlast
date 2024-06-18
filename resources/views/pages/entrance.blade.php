<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
    @vite('resources/sass/pages/entrance.sass')
</head>
<body>
    <div class="come-in">
        <form action="" method="POST">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <label for="email">
                <span>Почта</span>
                <input type="email" placeholder="example@mail.ru" name="email">
            </label>
            <label for="password">
                <span>Пароль</span>
                <input type="password" name="password">
            </label>
            <input type="submit" value="Войти">
            <div class="registration">
                <span>
                    Нет аккаунта? 
                    <a href="{{ route('register')}}">Зарегистрироваться</a>
                </span>
            </div>
        </form>
    </div>
</body>
</html>