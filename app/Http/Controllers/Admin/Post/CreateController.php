<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\User;

class CreateController extends Controller
{
    public function __invoke()
    {
        $users = User::all();
        return view('admin.posts.create', compact('users'));
    }
}
