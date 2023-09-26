<?php

namespace App\Http\Controllers\Admin\Info;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Info\UpdateRequest;
use App\Models\Info;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Info $info)
    {
        $data = $request->validated();
        $info->update($data);
        return redirect()->route('admin.info.index')->with('status','Site Info updated successfully!');
    }
}
