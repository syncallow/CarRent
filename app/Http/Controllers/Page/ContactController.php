<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Info;
use App\Models\Page;
use App\Models\Propose;

class ContactController extends Controller
{
    public function __invoke()
    {
        $info = Info::first();
        $page = Page::whereid(5)->first();

        return view('pages.contact', compact('info', 'page'));
    }
}
