<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Models\PostTag;
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
        $tags = Tag::all();
        return view('post.create', compact('categories', 'tags'));
    }

    public function store()
    {

        $data = request()->validate([
            'title' => 'required|string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => '',
            'tags' => '',

        ]);

        $tags = $data['tags'];
        unset($data['tags']);

        $post = Post::create($data);

        /*
        foreach($tags as $tag) {
            PostTag::firstOrCreate([
                'tag_id' => $tag,
                'post_id' => $post->id
            ]);
        }
        */
        $post->tags()->attach($tags); // заменяет форич под комментом выше

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
        $tags = Tag::all();

        return view('post.edit', compact('post', 'categories', 'tags'));
    }

    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => '',
            'tags' => '',
        ]);

        $tags = $data['tags'];
        unset($data['tags']);

        $post->update($data);
        // $post = $post->fresh(); // обновить пост, не обязательно
        $post->tags()->sync($tags);

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
