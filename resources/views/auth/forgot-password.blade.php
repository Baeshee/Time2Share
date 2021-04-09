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
        <title>Forgot Password</title>
    </head>
    <body class="forgot-password">

        <h2><a href="/">Time2Share <i class="fas fa-history"></i></a></h2>
        <form class="forgot-password-form" method="POST" action="{{ route('password.email') }}">
            @csrf

            <section class="forgot-password-form__section">
                <p>Forgot your password?</p>
                <p>Enter your email address and an email will be sent to you with a link for your new password.</p>
            </section>

            <section class="forgot-password-form__section">
                <label for="email"> Email </label>
                <input class="forgot-password-form__section__input" name="email" id="email" type="email"></input>
            </section>

            <section class="forgot-password-form__section__buttons">
                <input class="button active redirect" type="submit" value="Reset password">
            </section>
        </form>

    </body>
</html>