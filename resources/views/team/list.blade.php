@extends('layouts.main')

@section('title', 'Список команд')
@section('content')


ЧС БС СК

    <div id="team_list">
        <table>
        @foreach($arTeam as $team)
                <tr>
                    <td><a href="{{ route('team', $team->id) }}">{{ $team->name }}</a></td>
                </tr>
        @endforeach
        </table>
    </div>

@endsection
