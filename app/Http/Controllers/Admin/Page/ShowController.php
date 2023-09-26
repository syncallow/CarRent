<?php

namespace App\Http\Controllers\Admin\Page;

use App\Http\Controllers\Controller;
use App\Models\Page;

class ShowController extends Controller
{
    public function __invoke(Page $page)
    {
        return view('admin.pages.show', compact('page'));
    }
}
