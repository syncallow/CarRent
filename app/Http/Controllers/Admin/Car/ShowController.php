<?php

namespace App\Http\Controllers\Admin\Car;

use App\Http\Controllers\Controller;
use App\Models\Car;

class ShowController extends Controller
{
    public function __invoke(Car $car)
    {
        return view('admin.cars.show', compact('car'));
    }
}
