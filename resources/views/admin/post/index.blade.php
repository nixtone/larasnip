@extends('layouts.admin')


@section('content')
    <table>
        <tr>
            <th>Заголовок</th>
            <th>Дата создания</th>
        </tr>
        @foreach($posts as $post)
                <tr class="item c{{ $post->id }}">
                    <td><a href="{{ route('post.show', $post->id) }}" class="title">{{ $post->title }}</a></td>
                    <td>{{ $post->created_at }}</td>
                </tr>
        @endforeach
        <tr>
            <td colspan="2"><a href="{{ route('post.create') }}" class="btn">Добавить пост</a></td>
        </tr>
    </table>

    {{ $posts->withQueryString()->links() }}
@endsection

