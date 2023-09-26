<?php

namespace App\Http\Controllers\Admin\Page;

use App\Http\Controllers\Controller;
use App\Models\Page;

class IndexController extends Controller
{
    public function __invoke()
    {
        $pages = Page::all();
        return view('admin.pages.index', compact('pages'));
    }
}
