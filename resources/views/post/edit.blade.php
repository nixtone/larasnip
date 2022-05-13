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
            <!--
            <tr>
                <td>Категория</td>
                <td>
                    <select name="category_id" class="row">
                        <option value="1">Наркоманы</option>
                        <option value="2">Алкоголики</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Теги</td>
                <td>
                    <select multiple="" name="tags[]" class="row">
                        <option value="1">Сосисочки</option>
                        <option value="2">Колбаски</option>
                    </select>
                </td>
            </tr>
            -->
            <tr>
                <td colspan="2"><input type="submit" value="Редактировать пост" class="btn"></td>
            </tr>
		</table>
	</form>
</div>
@endsection