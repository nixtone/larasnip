<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        //$post = Post::find(1);
        //$posts = Post::all();
        //$posts = Post::where('is_published', 1)->get(); // where и get используются в паре
        $posts = Post::where('is_published', 1)->first();
        dump($posts);
    }

    public function create() {
        $postArr = [
            [
                'title' => 'test title 1',
                'content' => 'test content 1',
                'image' => 'img1',
                'likes' => 40,
                'is_published' => 1
            ],
            [
                'title' => 'test title 2',
                'content' => 'test content 2',
                'image' => 'img2',
                'likes' => 50,
                'is_published' => 1
            ],
        ];
        foreach($postArr as $item) {
            Post::create($item);
        }
    }

    public function update() {
        $post = Post::find(6);
        $post->update([
            'title' => 'updated',
            'content' => 'updated',
            'image' => 'updated',
            'likes' => 10,
            'is_published' => 1,
        ]);
        dd('upd');
    }

    public function delete() {
        $post = Post::withTrashed()->find(2); // withTrashed будет искать также среди мягкоудаленных
        $post->restore();
        // $post->delete();
        die('deleted');
    }

    public function firstOrCreate() {
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

    public function updateOrCreate() {
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
