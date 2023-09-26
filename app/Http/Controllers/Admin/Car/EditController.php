<?php

namespace App\Http\Controllers\Admin\Car;

use App\Http\Controllers\Controller;
use App\Models\Car;

class EditController extends Controller
{
    public function __invoke(Car $car)
    {
        return view('admin.cars.edit', compact('car'));
    }
}
