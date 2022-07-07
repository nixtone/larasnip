@extends('layouts.main')

@section('title', 'Игрок')
@section('content')
<div id="user">
    <img src="" alt="" class="user_pic">
    <div class="call">Позывной: Солдат</div>
    <div class="team">В команде: <a href="">Сокол</a></div>
    <div class="name">Имя: Николай</div>
    <div class="phone">Телефон: 8 951 84 74 678</div>
    <div class="vk">Вконтакте: <a href="">nixtone</a></div>

    <div class="battle_way">
        Боевой путь:
        <a href="">Открытие сезона 2022</a>
        <a href="">Флешпоинт: ответный удар</a>
        <a href="">Майский переход</a>
    </div>
</div>
@endsection
