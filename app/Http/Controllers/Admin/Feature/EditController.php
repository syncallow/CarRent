<?php

namespace App\Http\Controllers\Admin\Feature;

use App\Http\Controllers\Controller;
use App\Models\Feature;

class EditController extends Controller
{
    public function __invoke(Feature $feature)
    {
        return view('admin.features.edit', compact('feature'));
    }
}
