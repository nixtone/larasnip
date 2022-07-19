@extends('layouts.main')

@section('title', 'Игрок')
@section('content')

<div id="player_item">

    <table>
        <tr>
            <th>Позывной</th>
            <th>Имя</th>
            <th>Телефон</th>
            <th>https://vk.com/</th>
            <th>E-mail</th>
            <th>Должность</th>
            <th>Команда</th>
        </tr>
            <tr>
                <td>{{ $player->name }}</td>
                <td>{{ $player->real_name }}</td>
                <td><a href="tel:{{ $player->phone }}">{{ $player->phone }}</a></td>
                <td><a href="https://vk.com/{{ $player->socnet }}" target="_blank" rel="noopener">{{ $player->socnet }}</a></td>
                <td>{{ $player->email }}</td>
                <td>{{ $player->status }}</td>
                <td><a href="{{ route('team', $player->team_id) }}">{{ $team->name }}</a></td>
            </tr>
    </table>

    <?/**/?>

    <div class="battle_way">
        Боевой путь:
        <a href="">Открытие сезона 2022</a>
        <a href="">Флешпоинт: ответный удар</a>
        <a href="">Майский переход</a>
    </div>
</div>
@endsection
