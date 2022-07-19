@extends('layouts.main')

@section('title', 'Все игроки')
@section('content')

    <div id="player_list">
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
            @foreach($arPlayer as $player)
            <tr>
                <td><a href="/player/{{ $player->id }}">{{ $player->name }}</a></td>
                <td>{{ $player->real_name }}</td>
                <td><a href="tel:{{ $player->phone }}">{{ $player->phone }}</a></td>
                <td><a href="https://vk.com/{{ $player->socnet }}" target="_blank" rel="noopener">{{ $player->socnet }}</a></td>
                <td>{{ $player->email }}</td>
                <td>{{ $player->status }}</td>
                <td><a href="{{ route('team', $player->team_id) }}"><?=$arTeam[$player->team_id]?></a></td>
            </tr>
            @endforeach
        </table>
    </div>

    <?php // dd($arTeam); {{ $arTeam  }} ?>

@endsection
