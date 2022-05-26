<?php

namespace App\Http\Controllers;

use App\Http\Filters\PostFilter;
use App\Http\Requests\FilterRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request)
    {


        /*
        $query = Post::query();
        if(isset($data['category_id'])) {
            $query->where('category_id', $data['category_id']);
        }
        if(isset($data['title'])) {
            $query->where('title', 'like', "%{$data['title']}%");
        }
        if(isset($data['content'])) {
            $query->where('content', 'like', "%{$data['content']}%");
        }
        $posts = $query->get();
        $posts = Post::paginate(10);
        */

        $data = $request->validated();
        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);
        $posts = Post::filter($filter)->paginate(10); // без пагинации "->get();"
        return view('post.index', compact('posts'));
    }
}
