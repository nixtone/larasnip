<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);
        return redirect()->route('post.index');
    }
}
