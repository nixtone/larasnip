@extends('layouts.main')

@section('content')
@section('title', $post->title)
<div id="post_item">
	<div class="sort">
		<div class="date_created">{{ $post->created_at }}</div>
        <!--
		<div class="category">Категория: Цветы</div>
		<div class="tags">
			<div class="tag">Одуванчики</div>
			<div class="tag">дикие</div>
		</div>
        -->
	</div>

	<div class="text">
		<img src="/src/static/images/upload/post/{{ $post->image }}.jpg" alt="" class="preview" style="float:right; margin-left: 15px;">
        {!! $post->content !!}
	</div>
	<div class="manage">
		<a href="{{ route('post.edit', $post->id) }}" class="edit btn">Редактировать</a>
		<form action="{{ route('post.destroy', $post->id) }}" method="post">
            @csrf
            @method('delete')
			<input type="submit" value="Удалить" class="btn">
		</form>
	</div>
</div>
@endsection
