<?php

namespace App\Http\Controllers\Admin\Car;

use App\Http\Controllers\Controller;
use App\Models\Car;

class IndexController extends Controller
{
    public function __invoke()
    {
        $cars = Car::all();
        return view('admin.cars.index', compact('cars'));
    }
}
