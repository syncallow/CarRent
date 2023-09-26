<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Info;
use App\Models\Page;
use App\Models\Post;
use App\Models\Propose;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __invoke()
    {
        $info = Info::first();
        $page = Page::whereid(3)->first();
        $posts = Post::paginate(6);
        $propose = Propose::first();

        return view('pages.blog', compact('info', 'page', 'posts','propose'));
    }
}
