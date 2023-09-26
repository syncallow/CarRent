<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']); //Хешируем пароль
        if (isset($data['profile_image'])){
            $data['profile_image'] = Storage::disk('public')->put('/images', $data['profile_image']);//Добавляем картинку если её загрузили
        }

        User::firstOrCreate([
            'email'=> $data['email'] //Добавляем только если емеил не совпадает с другими
        ], $data);
        return redirect()->route('admin.user.index')->with("status", "User was created successfully!");
    }
}
