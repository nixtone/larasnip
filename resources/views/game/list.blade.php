@extends('layouts.main')

@section('title', 'Календарь игр')
@section('content')

    <div id="game_list">
        <table>
            <tr>
                <th>Название игры</th>
                <th>Полигон</th>
                <th>Начало</th>
                <th>Конец</th>
            </tr>
            @foreach($arGame as $game)
            <tr>
                <td><a href="{{ route('game', $game->id) }}">{{ $game->name }}</a></td>
                <td>{{ $game->location_name }}</td>
                <td>{{ $game->date_start }}</td>
                <td>{{ $game->date_end }}</td>
            </tr>
            @endforeach
        </table>
    </div>

@endsection
