<?php

namespace App\Http\Controllers\Admin\Car;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Car\StoreRequest;
use App\Models\Car;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        if (isset($data['image'])) {
            $data['image'] = Storage::disk('public')->put('/images', $data['image']);
        }
        Car::firstOrCreate($data);
        return redirect()->route('admin.cars.index')->with('status','New car created successfully!');
    }
}
