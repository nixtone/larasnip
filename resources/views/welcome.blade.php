@extends('layout')


@section('content')
@section('h1', 'Главная')
<p>Ветка реализации действий с пользователем. Сниппеты канала "Lectoria"</p>
<h3>Валидация. Ответ автора</h3>
<p>Если ваша модель User наследует класс <strong>Illuminate\Foundation\Auth\User</strong> (а по-умолчанию в Laravel именно так), то при регистрации
пользователя происходит отправка письма для подтверждения почты при помощи метода <strong>sendEmailVerificationNotification</strong>
в трейте <strong>Illuminate\Auth\Notifications\VerifyEmail\MustVerifyEmail</strong>. Можете просто заглянуть в исходный код, чтобы просто понять логику, как это работает.</p>
<p>Также вы можете расширить <strong>класс User</strong> и описать свою логику отправки соответствующих писем с необходимыми данными.</p>
<p>Процесс отправки писем хорошо описан в документации: <a href="https://laravel.com/docs/8.x/mail">https://laravel.com/docs/8.x/mail</a>.</p>
@endsection
