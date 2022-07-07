<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/favicon.png">
    <title>@yield('title', 'Страйкбол')</title>
    <link rel="stylesheet" href="/resources/static/custom.css">
</head>
<body>
<div id="wrapper">
    <header>
        <div class="container">
            <a href="/" id="logo"><img src="/resources/static/images/logo.png" alt="" style="max-width: 150px;"></a>
            <nav>
                <a href="/player">Игроки</a>
                <a href="/team" class="active">Команды</a>
                <a href="/game">Игры</a>
                <a href="/camo">Камуфляжи</a>
            </nav>
        </div>
    </header>

    <div class="container">
        <h1>@yield('title')</h1>
        @yield('content')
    </div>

</div>
<footer>
    <div class="container">
        Сайт делал <a href="">nixtone</a>
    </div>
</footer>
<script src="/resources/static/jquery-3.6.0.min.js"></script>
<script src="/resources/static/custom.js"></script>
</body>
</html>
