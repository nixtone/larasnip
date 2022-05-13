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
        $posts = Post::all();

        return view('post.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('post.create', compact('categories'));
    }

    public function store()
    {

        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => '',

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
        $categories = Category::all();
        return view('post.edit', compact('post', 'categories'));
    }

    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => '',
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
