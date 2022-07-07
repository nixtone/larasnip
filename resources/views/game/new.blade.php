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
</div>
@endsection
