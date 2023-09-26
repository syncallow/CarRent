<?php

namespace App\Http\Controllers\Admin\Promo;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Promo\UpdateRequest;
use App\Models\Promo;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Promo $promo)
    {
        $data = $request->validated();
        if(isset($data['image'])){
            $data['image'] = Storage::disk('public')->put('/images',$data['image']);
        }
        $promo->update($data);
        return redirect()->route('admin.promo.index')->with('status','Site Promo updated successfully!');
    }
}
