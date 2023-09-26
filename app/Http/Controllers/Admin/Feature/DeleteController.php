<?php

namespace App\Http\Controllers\Admin\Feature;

use App\Http\Controllers\Controller;
use App\Models\Feature;

class DeleteController extends Controller
{
    public function __invoke(Feature $feature)
    {
        $feature->delete();
        return redirect()->route('admin.features.index')->with('status', 'Feature deleted successfully!');
    }
}
