<?php

namespace App\Http\Controllers\Admin\Feature;

use App\Http\Controllers\Controller;
use App\Models\Feature;

class IndexController extends Controller
{
    public function __invoke()
    {
        $features = Feature::all();
        return view('admin.features.index', compact('features'));
    }
}
