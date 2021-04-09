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
        <title>Register</title>
    </head>
    <body class="register">

        <h2><a href="/">Time2Share <i class="fas fa-history"></i></a></h2>
        <form class="register-form" method="POST" action="{{ route('register') }}">
            @csrf

            <section class="register-form__section">
                <label for="name"> Name </label>
                <input class="register-form__section__input" name="name" id="name" type="text"></input>
            </section>

            <section class="register-form__section">
                <label for="email"> Email </label>
                <input class="register-form__section__input" name="email" id="email" type="email"></input>
            </section>

            <section class="register-form__section">
                <label for="password"> Password </label>
                <input class="register-form__section__input" name="password" id="password" type="password"></input>
            </section>

            <section class="register-form__section">
                <label for="password_confirmation"> Password Confirmation</label> </label>
                <input class="register-form__section__input" name="password_confirmation" id="password_confirmation" type="password"></input>
            </section>

            <section class="register-form__section__buttons">
                <input class="button active redirect-small" type="submit" value="Register">
            </section>

            <section class="register-form__section__buttons">
                <a class="register-link" href="/login">Already Registered?</a>
            </section>
        </form>

    </body>
</html>