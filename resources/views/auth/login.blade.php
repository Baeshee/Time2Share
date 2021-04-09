<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link href="/css/master.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/3524fdec76.js" crossorigin="anonymous"></script>
        <script src="/js/main.js" defer></script>
        <title>Login</title>
    </head>
    <body class="login">

        <h2><a href="/">Time2Share <i class="fas fa-history"></i></a></h2>
        <form class="login-form" method="POST" action="{{ route('login') }}">
            @csrf

            <section class="login-form__section">
                <label for="email"> Email </label>
                <input class="login-form__section__input" name="email" id="email" type="email"></input>
            </section>

            <section class="login-form__section">
                <label for="password"> Password </label>
                <input class="login-form__section__input" name="password" id="password" type="password"></input>
            </section>

            <section class="login-form__section__buttons">
                <a class="login-link" href="{{ route('password.request') }}">Forgot Password?</a>
                <input class="button active redirect-small" type="submit" value="Login">
            </section>

            <section class="login-form__section__buttons">
                <a class="login-link smaller-text" href="/register">Register here if you dont have an account</a>
            </section>
        </form>

    </body>
</html>