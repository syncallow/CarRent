<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Info;
use App\Models\Page;
use App\Models\Propose;

class AboutController extends Controller
{
    public function __invoke()
    {
        $info = Info::first();
        $page = Page::whereid(4)->first();
        $propose = Propose::first();

        return view('pages.about', compact('info', 'page', 'propose'));
    }
}
