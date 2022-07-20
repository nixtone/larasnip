@extends('layout')


@section('content')
@section('h1', 'Регистрация')
<form action="{{ route('user.reg') }}" method="post">
    @csrf
    <table>
        <tr>
            <td><label for="username">Username</label></td>
            <td>
                <input type="text" name="name" id="username">
                @error('name')<span class="err">{{ $message }}</span>@enderror
            </td>
        </tr>
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
                <input type="submit" value="Sign Up">
            </td>
        </tr>
    </table>
</form>
@endsection
