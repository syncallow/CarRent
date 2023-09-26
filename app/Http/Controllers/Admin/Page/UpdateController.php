<?php

namespace App\Http\Controllers\Admin\Page;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Page\UpdateRequest;
use App\Models\Page;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Page $page)
    {
        $data = $request->validated();

        if (isset($data['image'])) {
            $data['image'] = Storage::disk('public')->put('/images', $data['image']);
        }
        $page->update($data);
        return redirect()->route('admin.pages.show', compact('page'))->with('status','Page updated successfully!');
    }
}
