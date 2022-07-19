@extends('layouts.main')

@section('title', 'Игра: '.$game->name)
@section('content')

    <div id="game_item">
        <table>
            <tr>
                <th>Полигон</th>
                <th>Координаты</th>
                <th>Организатор</th>
                <th>Начало</th>
                <th>Конец</th>
                <th>Заявка создана</th>
            </tr>
            <tr>
                <td>{{ $game->location_name }}</td>
                <td><a href="https://yandex.ru/maps/?ll={{ $game->location_coordinates }}&z=12&l=map" target="_blank" rel="noopener">{{ $game->location_coordinates }}</a></td>

                <td><a href="{{ route('team', $game->team_id) }}">{{ $team->name }}</a></td>
                <td>{{ $game->date_start }}</td>
                <td>{{ $game->date_end }}</td>
                <td>{{ $game->created_at }}</td>
            </tr>
        </table>

        <div class="script">{!! $game->description !!}</div>

        <!--
        1. Наименование Команды
        2. Количество человек
        3. Камуфляж
        4. Игровой транспорт
        5. Инфо о команде: Поручитель,БС,СК
        6. Шеврон команды
        7. Город базирования
        -->

        <?/*{{ $arPlayerRequest }} */?>

        <table>
            <tr>
                <th colspan="5">Заявки на участие</th>
            </tr>
            <tr>
                <th>Название</th>
                <th>Количество человек</th>
                <th>Камуфляж</th>
                <th>Игровой транспорт</th>
                <th>Статус</th>
            </tr>
            @foreach($arGameRequest as $gameRequest)
            <tr>
                <td><a href="{{ route('team', $gameRequest->team_id) }}">{{ $gameRequest->team_id }}</a></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            @endforeach
        </table>
    </div>

@endsection
