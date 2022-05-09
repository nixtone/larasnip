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
}
