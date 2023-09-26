<?php

namespace App\Http\Controllers\Admin\Car;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Car\UpdateRequest;
use App\Models\Car;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Car $car)
    {
        $data = $request->validated();

        if (isset($data['image'])) {
            $data['image'] = Storage::disk('public')->put('/images', $data['image']);
        }
        $car->update($data);
        return redirect()->route('admin.cars.show', compact('car'))->with('status','Car updated successfully!');
    }
}
