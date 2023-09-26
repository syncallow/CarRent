<?php

namespace App\Http\Controllers\Admin\Info;

use App\Http\Controllers\Controller;
use App\Models\Info;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Info $info)
    {
        return view('admin.info.edit', compact('info'));
    }
}
