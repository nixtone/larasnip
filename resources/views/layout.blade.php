<!doctype html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lectoria</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<style>
.container {
    box-sizing: border-box;
    margin: 0 auto;
    max-width: 720px;
    min-width: 320px;
    border: 1px solid #96bde9;
    padding: 15px;
}
td {
    padding: 5px;
}
.err {
    color: #ff0000;
}
.msg {
    color: #5a8dc6;
}
</style>
</head>
<body>

<div class="container">
    <header style="display: flex; justify-content: space-between">
        <a href="/">На главную</a>
        @guest
        <div>
            <a href="/login">Аутентификация</a> /
            <a href="/reg">Регистрация</a>
        </div>
        @endguest
        @auth
            <div>Вы: <a href="{{ route('user.private') }}">{{ Auth::user()->name }}</a> / <a href="/logout">Выход</a></div>
        @endauth
    </header>
    <div class="content">
        <h1>@yield('h1')</h1>
        @yield('content')
    </div>
</div>

</body>
</html>
