<?php

namespace App\Http\Controllers\Admin\Propose;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Propose\UpdateRequest;
use App\Models\Propose;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Propose $propose)
    {
        $data = $request->validated();
        if(isset($data['image'])){
            $data['image'] = Storage::disk('public')->put('/images',$data['image']);
        }
        $propose->update($data);
        return redirect()->route('admin.propose.index')->with('status','Site Propose updated successfully!');
    }
}
