@extends('layouts.main')

@section('content')
@section('title', 'Создать новый пост')
<div id="post_add">
	<form action="{{ route('post.store') }}" method="post">
        @csrf
		<table>
            <tr>
                <td>Заголовок</td>
                <td><input type="text" name="title" class="row"></td>
            </tr>
            <tr>
                <td>Текст</td>
                <td><textarea name="content" id="" class="row"></textarea></td>
            </tr>
            <tr>
                <td>Картинка</td>
                <td><input type="text" name="image" class="row"></td>
            </tr>

            <tr>
                <td>Категория</td>
                <td>
                    <select name="category_id" class="row">
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>

            <tr>
                <td>Теги</td>
                <td>
                    <select multiple="" name="tags[]" class="row">
                        @foreach($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>

            <tr>
                <td colspan="2"><input type="submit" value="Добавить пост" class="btn"></td>
            </tr>
		</table>
	</form>
</div>
@endsection
