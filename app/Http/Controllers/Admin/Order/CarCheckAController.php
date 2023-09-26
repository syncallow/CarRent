<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Controllers\Controller;
use App\Models\Car;

class CarCheckAController extends Controller
{
    public function __invoke()
    {
        $cars = Car::all();
        return view('admin.orders.check', compact('cars'));
    }
}
