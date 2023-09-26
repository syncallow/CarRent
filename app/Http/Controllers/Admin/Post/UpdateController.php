<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();

        if (isset($data['image'])) {
            $data['image'] = Storage::disk('public')->put('/images', $data['image']);
        }
        $post->update($data);
        return redirect()->route('admin.posts.show', compact('post'))->with('status','Post updated successfully!');
    }
}
