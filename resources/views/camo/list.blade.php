@extends('layouts.main')

@section('title', 'Список камуфляжей')
@section('content')

    <div id="camo_list">
        <table>
            <tr>
                <th>Название</th>
                <th>Описание</th>
                <th>Правообладатель</th>
            </tr>
            @foreach($arCamo as $camo)
            <tr>
                <td><a href="{{ route('camo', $camo->id) }}">{{ $camo->name }}</a></td>
                <td>{{ $camo->description }}</td>
                <td></td>
            </tr>
            @endforeach
        </table>
    </div>

@endsection
