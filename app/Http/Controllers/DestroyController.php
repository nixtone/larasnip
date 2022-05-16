<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DestroyController extends BaseController
{
    public function __invoke(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }
}
