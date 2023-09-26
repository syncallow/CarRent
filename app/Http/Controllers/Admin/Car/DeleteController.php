<?php

namespace App\Http\Controllers\Admin\Car;

use App\Http\Controllers\Controller;
use App\Models\Car;

class DeleteController extends Controller
{
    public function __invoke(Car $car)
    {
        $car->delete();
        return redirect()->route('admin.cars.index')->with('status', 'Car deleted successfully!');
    }
}
