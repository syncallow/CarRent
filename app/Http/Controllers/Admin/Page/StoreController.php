<?php

namespace App\Http\Controllers\Admin\Page;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Page\StoreRequest;
use App\Models\Page;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        if (isset($data['image'])) {
            $data['image'] = Storage::disk('public')->put('/images', $data['image']);
        }
        Page::firstOrCreate($data);
        return redirect()->route('admin.pages.index')->with('status','Page created successfully!');
    }
}
