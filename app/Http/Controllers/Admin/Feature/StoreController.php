<?php

namespace App\Http\Controllers\Admin\Feature;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Feature\StoreRequest;
use App\Models\Feature;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        Feature::firstOrCreate($data);
        return redirect()->route('admin.features.index')->with('status','New feature created successfully!');
    }
}
