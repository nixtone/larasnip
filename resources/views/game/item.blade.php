@extends('layouts.main')

@section('title', 'Игра')
@section('content')
    <div id="game">
        <h2>Описание игры и все такое</h2>
    </div>
    <div id="team_game">
        <!-- Доступно только для командира, команда уже выбрана -->
        <table>
            <tr>
                <td>Название игры</td>
                <td><strong>Открытие сезона 2022</strong></td>
            </tr>
            <tr>
                <td>Поручитель</td>
                <td>
                    <select name="" id="">
                        <option value="">Сокол</option>
                        <option value="">Мотострелки</option>
                        <option value="">РГСпН Пластунский</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Участники</h3>
                    <label for="c1"><input type="checkbox" name="" id="c1">Кащей</label>
                    <label for="c2"><input type="checkbox" name="" id="c2">Солдат</label>
                    <label for="c3"><input type="checkbox" name="" id="c3">Вепрь</label>
                    <label for="c4"><input type="checkbox" name="" id="c4">Техник</label>
                    <label for="c5"><input type="checkbox" name="" id="c5">Оружейник</label>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Создать заявку"></td>
            </tr>
        </table>
    </div>
@endsection
