@extends('layouts.main')

@section('title', 'Новая игра')
@section('content')
<div id="game_new">
    <form action="">
        <table>
            <tr>
                <td>Название игры</td>
                <td><input type="text" name=""></td>
            </tr>
            <tr>
                <td>Город, полигон</td>
                <td><input type="text" name=""></td>
            </tr>
            <tr>
                <td>Координаты полигона</td>
                <td><input type="text" name=""></td>
            </tr>
            <tr>
                <td>Сценарий игры</td>
                <td><textarea name=""></textarea></td>
            </tr>
            <tr>
                <td>Команда - организатор</td>
                <td>
                    <select name="" id="">
                        <option value="">Сокол</option>
                        <option value="">Мотострелки</option>
                        <option value="">РГСпН Пластунский</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Дата и время начала</td>
                <td><input type="date" name=""></td>
            </tr>
            <tr>
                <td>Дата и время конца</td>
                <td><input type="date" name=""></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Создать игру"></td>
            </tr>
        </table>
    </form>

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
</div>
@endsection
