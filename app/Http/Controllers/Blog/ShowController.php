<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Info;
use App\Models\Page;
use App\Models\Post;
use App\Models\Propose;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Post $post)
    {
        $info = Info::first();
        $page = Page::whereid(3)->first();

        return view('pages.single', compact('info', 'page', 'post'));
    }
}
