@extends('layouts.main')

@section('content')
@section('title', 'Редактировать пост: '.$post->title)
<div id="post_add">
	<form action="{{ route('post.update', $post->id) }}" method="post">
        @csrf
        @method('patch')
		<table>
            <tr>
                <td>Заголовок</td>
                <td><input type="text" name="title" class="row" value="{{ $post->title }}"></td>
            </tr>
            <tr>
                <td>Текст</td>
                <td><textarea name="content" id="" class="row">{{ $post->content }}</textarea></td>
            </tr>
            <tr>
                <td>Картинка</td>
                <td><input type="text" name="image" class="row" value="{{ $post->image }}"></td>
            </tr>

            <tr>
                <td>Категория</td>
                <td>
                    <select name="category_id" class="row">
                        @foreach($categories as $category)
                            <option
                                {{ $category->id == $post->category->id ? ' selected' : '' }}
                                value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>

            <tr>
                <td>Теги</td>
                <td>
                    <select multiple="" name="tags[]" class="row">
                        @foreach($tags as $tag)
                            <option
                                @foreach($post->tags as $postTag)
                                    {{ $tag->id == $postTag->id ? ' selected' : '' }}
                                @endforeach
                                value="{{ $tag->id }}">{{ $tag->title }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>

            <tr>
                <td colspan="2"><input type="submit" value="Редактировать пост" class="btn"></td>
            </tr>
		</table>
	</form>
</div>
@endsection
