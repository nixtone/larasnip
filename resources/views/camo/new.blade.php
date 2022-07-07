@extends('layouts.main')

@section('title', 'Новый камуфляж')
@section('content')
<div id="camuflage_new">
    <form action="">
        <table>
            <tr>
                <td>Название камуфляжа</td>
                <td><input type="text" name="" class="field"></td>
            </tr>
            <tr>
                <td>Фотообразец камуфляжа</td>
                <td><input type="file" name="" placeholder=""></td>
            </tr>
            <tr>
                <td>Команда правообладатель</td>
                <td>
                    <select name="" id="">
                        <option value="">Сокол</option>
                        <option value="">Мотострелки</option>
                        <option value="">РГСпН Пластунский</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Описание</td>
                <td><textarea name=""></textarea></td>
            </tr>
            <tr>
                <td colspan=""><input type="submit" value="Закрепить"></td>
            </tr>
        </table>
    </form>
</div>
@endsection
