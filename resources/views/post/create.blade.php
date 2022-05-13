@extends('layouts.main')

@section('content')
@section('title', 'Создать новый пост')
<div id="post_add">
	<form action="{{ route('post.store') }}" method="post">
        @csrf
		<table>
            <tr>
                <td>Заголовок</td>
                <td>
                    @error('title')
                        <div class="err">{{ $message }}</div>
                    @enderror
                    <input type="text" name="title" class="row" value="{{ old('title') }}">
                </td>
            </tr>
            <tr>
                <td>Текст</td>
                <td>
                    @error('content')
                        <div class="err">{{ $message }}</div>
                    @enderror
                    <textarea name="content" id="" class="row">{{ old('content') }}</textarea>
                </td>
            </tr>
            <tr>
                <td>Картинка</td>
                <td>
                    @error('image')
                        <div class="err">{{ $message }}</div>
                    @enderror
                    <input type="text" name="image" class="row" value="{{ old('image') }}">
                </td>
            </tr>

            <tr>
                <td>Категория</td>
                <td>
                    <select name="category_id" class="row">
                        @foreach($categories as $category)
                        <option
                            {{ old('category_id') == $category->id ? ' selected' : '' }}
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
