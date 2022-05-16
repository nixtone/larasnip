<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    public function __invoke(Post $post)
    {
        return view('post.show', compact('post'));
    }
}
