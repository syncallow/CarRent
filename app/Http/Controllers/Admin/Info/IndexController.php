<?php

namespace App\Http\Controllers\Admin\Info;

use App\Http\Controllers\Controller;
use App\Models\Info;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $info = Info::find(1);
        return view('admin.info.index', compact('info'));
    }
}
