@extends('layouts.main')

@section('title', 'Регистрация игрока')
@section('content')
<div id="player_new" class="wide">
    <form>
        <table>
            <tr>
                <td>Позывной</td>
                <td><input type="text" name="" class="field"></td>
            </tr>
            <tr>
                <td>Настоящее имя</td>
                <td><input type="text" name="" class="field"></td>
            </tr>
            <tr>
                <td>Телефон</td>
                <td><input type="text" name="" class="field"></td>
            </tr>
            <tr>
                <td>ВКонтакте</td>
                <td><input type="text" name="" class="field"></td>
            </tr>
            <tr>
                <td>Пароль</td>
                <td><input type="password" name=""></td>
            </tr>
            <tr>
                <td>Пароль еще раз</td>
                <td><input type="password" name=""></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Регистрация"></td>
            </tr>
        </table>
    </form>
</div>
@endsection
