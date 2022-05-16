<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class EditController extends BaseController
{
    public function __invoke(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('post.edit', compact('post', 'categories', 'tags'));
    }
}
