<?php

namespace App\Http\Controllers\Admin\Feature;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Feature\UpdateRequest;
use App\Models\Feature;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Feature $feature)
    {
        $data = $request->validated();

        $feature->update($data);
        return redirect()->route('admin.features.show', compact('feature'))->with('status','Feature updated successfully!');
    }
}
