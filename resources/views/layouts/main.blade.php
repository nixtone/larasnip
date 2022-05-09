<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/png" href="favicon.png">
<title>Larasnip / сборник сниппетов</title>
<link rel="stylesheet" href="/static/custom.css">
</head>
<body>
<div id="wrapper">
	<div class="container">
		<header>
			<!-- <a href="/" id="logo"><img src="/src/static/images/logo.png" alt=""></a> -->
			<nav>
				<a href="/">Главная</a>
				<a href="{{ route('post.index') }}">Посты</a>
				<a href="">Текст</a>
				<span>
					<a href="/auth">Аутентификация</a> |
					<a href="/reg">Регистрация</a>
				</span>
			</nav>
		</header>

		<h1>Заголовок страницы</h1>

		<div id="breadcrumbs">
			<a href="" class="crumb">Главная</a> »
			<a href="" class="crumb">Посты</a> »
			<span>Тестовая запись</span>
		</div>

		@yield('content')

	</div>
</div>
<footer>
	<div class="container">Larasnip – вспомогательный проект сниппетов по laravel. &copy; Nixtone 2022</div>
</footer>
<script src="/public/static/jquery-3.6.0.min.js"></script>
<script src="/public/static/custom.js"></script>
</body>
</html>
