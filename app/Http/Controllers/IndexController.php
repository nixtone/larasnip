<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke(Request $request)
    {
        $posts = Post::paginate(10);
        return view('post.index', compact('posts'));
    }
}
