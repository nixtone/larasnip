@extends('layouts.main')

@section('content')
@section('title', 'Список постов')
<div id="post_list">
	<a href="{{ route('post.create') }}" class="btn">Добавить пост</a>
	<div class="inner">
        @foreach($posts as $post)
		<div class="item c{{ $post->id }}">
			<div class="date_created">{{ $post->created_at }}</div>
			<div class="title">{{ $post->title }}</div>
			<a href="{{ route('post.show', $post->id) }}" class="more">Подробней</a>
		</div>
        @endforeach
	</div>
</div>
@endsection
