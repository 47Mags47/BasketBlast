<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}} - Регистрация</title>
    @vite('resources/sass/pages/register.sass')
</head>
<body>
    <div class="registration">
            <form action="" method="POST">
                <label for="nickname">
                    <span>Никнейм</span>
                    <input type="text" placeholder="Никнейм" name="nickname" id="nickname">
                </label>
                <label for="login">
                    <span>Логин</span>
                    <input type="text" placeholder="Логин" name="login" id="login">
                </label>
                <label for="email">
                    <span>Эл. адресс</span>
                    <input type="email" placeholder="example@mail.ru" name="email" id="email">
                </label>
                <label for="password">
                    <span>Придумайте пароль</span>
                    <input type="password" name="password" id="password">
                </label>
                <label for="password-confirmation">
                    <span>Повторите пароль</span>
                    <input type="password" name="password-confirmation" id="password-confirmation">
                </label>
                <input type="submit" value="Зарегистрироваться">
                <div class="form-outside">
                    <span>
                        "Уже есть аккаунт?"
                        <a class="entrance" href="">Войти</a>
                    </span>
                </div>
            </form>   
    </div>
</body>
</html>