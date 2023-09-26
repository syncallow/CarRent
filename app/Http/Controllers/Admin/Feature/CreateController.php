<?php

namespace App\Http\Controllers\Admin\Feature;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.features.create');
    }
}
