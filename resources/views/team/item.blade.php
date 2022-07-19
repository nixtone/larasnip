@extends('layouts.main')

@section('title', 'Команда')
@section('content')

    <div id="team_item">
        <table>
            <tr>
                <th>Название</th>
                <th>Статус</th>
                <th>Описание</th>
                <th>Создана</th>
            </tr>
            <tr>
                <td>{{ $team->name }}</td>
                <td>{{ $team->status }}</td>
                <td>{{ $team->description }}</td>
                <td>{{ $team->created_at }}</td>
            </tr>
        </table>

        <table>
            <tr>
                <th colspan="6">Штатное расписание</th>
            </tr>
            <tr>
                <th>Позывной</th>
                <th>Имя</th>
                <th>Телефон</th>
                <th>https://vk.com/</th>
                <th>E-mail</th>
                <th>Должность</th>
            </tr>
            @foreach($arPlayer as $player)
                <tr>
                    <td><a href="/player/{{ $player->id }}">{{ $player->name }}</a></td>
                    <td>{{ $player->real_name }}</td>
                    <td><a href="tel:{{ $player->phone }}">{{ $player->phone }}</a></td>
                    <td><a href="https://vk.com/{{ $player->socnet }}" target="_blank" rel="noopener">{{ $player->socnet }}</a></td>
                    <td>{{ $player->email }}</td>
                    <td>{{ $player->status }}</td>
                </tr>
            @endforeach
        </table>

    </div>

@endsection
