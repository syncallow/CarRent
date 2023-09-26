<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Storage;


class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, User $user)
    {
        $data = $request->validated();

        if (isset($data['profile_image'])){
            $data['profile_image'] = Storage::disk('public')->put('/images', $data['profile_image']);
        } else {
            if($data['profile_image_delete'] === 'true'){
                $data['profile_image'] = '';
            }
        }
        $user->update($data);
        return redirect()->route('admin.user.show', compact('user'))->with("status", "Changes saved successfully!");
    }
}
