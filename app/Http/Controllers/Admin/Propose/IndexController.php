<?php

namespace App\Http\Controllers\Admin\Propose;

use App\Http\Controllers\Controller;
use App\Models\Propose;

class IndexController extends Controller
{
    public function __invoke()
    {
        $propose = Propose::find(1);
        return view('admin.propose.index', compact('propose'));
    }
}
