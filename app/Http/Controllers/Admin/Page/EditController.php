<?php

namespace App\Http\Controllers\Admin\Page;

use App\Http\Controllers\Controller;
use App\Models\Page;

class EditController extends Controller
{
    public function __invoke(Page $page)
    {
        return view('admin.pages.edit', compact('page'));
    }
}
