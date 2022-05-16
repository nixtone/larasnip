<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();
        $this->service->update($post, $data);
        return redirect()->route('post.show', $post->id);
    }
}
