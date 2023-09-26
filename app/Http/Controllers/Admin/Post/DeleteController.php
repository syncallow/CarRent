<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class DeleteController extends Controller
{
    public function __invoke(Post $Post)
    {
        $Post->delete();
        return redirect()->route('admin.posts.index')->with('status', 'Post deleted successfully!');
    }
}
