<?php

namespace App\Http\Controllers\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Comment\StoreRequest;
use App\Models\Comment;
use App\Models\Post;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $request->validated();

        Comment::create([
            'author_id' => auth()->id(),
            'post_id' => $request->post_id,
            'message' => $request->message,
        ]);

        return back()->with('status', 'Comment successfully added');

    }
}
