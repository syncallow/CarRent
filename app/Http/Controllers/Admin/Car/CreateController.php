<?php

namespace App\Http\Controllers\Admin\Car;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.cars.create');
    }
}
