@extends('layouts.main')

@section('title', 'Новая команда')
@section('content')
<div id="team_new">
    <form action="">
        <table>
            <tr>
                <td>Название команды</td>
                <td><input type="text" name="" class="field"></td>
            </tr>
            <tr>
                <td>Фото команды</td>
                <td><input type="file" name=""></td>
            </tr>
            <tr>
                <td>Фото шеврона</td>
                <td><input type="file" name=""></td>
            </tr>
            <tr>
                <td>О команде:</td>
                <td><textarea name=""></textarea></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Создать"></td>
            </tr>
        </table>
    </form>
</div>
@endsection
