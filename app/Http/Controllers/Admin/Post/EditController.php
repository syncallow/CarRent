<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;

class EditController extends Controller
{
    public function __invoke(Post $post)
    {
        $users = User::all();

        return view('admin.posts.edit', compact('post', 'users'));
    }
}
