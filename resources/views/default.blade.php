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
        <title>Time2Share</title>
    </head>
    <body>

        @include('components.navigation')

        <main id="main">
              
            @yield('content')

        </main>
    </body>
</html>