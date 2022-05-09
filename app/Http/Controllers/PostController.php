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
}
