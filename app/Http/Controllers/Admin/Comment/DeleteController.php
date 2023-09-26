<?php

namespace App\Http\Controllers\Admin\Comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;

class DeleteController extends Controller
{
    public function __invoke(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('admin.comments.index')->with('status', 'Comment deleted successfully!');
    }
}
