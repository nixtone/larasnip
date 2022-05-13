<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::all();
        // $posts = Post::where('category_id', $categories->id)->get(); // вынесено в модели
        // $category = Category::find(2);
        $post = Post::find(1);
        $tag = Tag::find(1);
        dd($tag->posts);
        // return view('post.index', compact('posts'));
    }

    public function create()
    {

        return view('post.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
        ]);
        Post::create($data);
        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {
        // $post = Post::findOrFail($id); // заменяется аргументом метода '(Post $post)'
        return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }

    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
        ]);
        $post->update($data);
        return redirect()->route('post.show', $post->id);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }

    public function delete()
    {
        $post = Post::withTrashed()->find(2); // withTrashed будет искать также среди мягкоудаленных
        $post->restore();
        // $post->delete();
        die('deleted');
    }

    public function firstOrCreate()
    {
        $post = Post::firstOrCreate([
            'title' => 'test4', // если не будет найдено значение 'test4' в колонке 'title'
        ],
            [ // то будет создана следующая запись:
                'title' => 'test4',
                'content' => 'test3 content',
                'image' => 'img3',
                'likes' => 5,
                'is_published' => 1,
            ]
        );
        dd($post);
    }

    public function updateOrCreate()
    {
        $post = Post::updateOrCreate([
            'title' => 'test5', // если не будет найдено значение 'test5' в колонке 'title'
        ],
            [ // то будет создана следующая запись, а если найдется, то поля обновятся на:
                'title' => 'test5',
                'content' => 'test3 content retest',
                'image' => 'img3',
                'likes' => 5,
                'is_published' => 1,
            ]);
        dd($post);
    }

}
