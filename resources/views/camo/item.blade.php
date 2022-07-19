@extends('layouts.main')

@section('title', 'Камуфляж')
@section('content')

    <img src="" alt="">

    <div id="camo_item">
        <table>
            <tr>
                <th>Название</th>
                <th>Описание</th>
                <th>Правообладатель</th>
            </tr>
            <tr>
                <td>{{ $camo->name }}</td>
                <td>{{ $camo->description }}</td>
                <td></td>
            </tr>
        </table>
    </div>

@endsection
