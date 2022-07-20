@extends('layout')


@section('content')
@section('h1', 'Вход')
<form action="{{ route('user.login') }}" method="post">
    @csrf
    <table>
        <tr>
            <td><label for="email">E-mail</label></td>
            <td>
                <input type="text" name="email" id="email">
                @error('email')<span class="err">{{ $message }}</span>@enderror
            </td>
        </tr>
        <tr>
            <td><label for="password">Password</label></td>
            <td>
                <input type="password" name="password" id="password">
                @error('password')<span class="err">{{ $message }}</span>@enderror
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Запомнить меня</label>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Sign In">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                @error('formError')<span class="err">{{ $message }}</span>@enderror
            </td>
        </tr>
    </table>
</form>
@endsection
