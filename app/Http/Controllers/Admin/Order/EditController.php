<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Order;
use App\Models\User;

class EditController extends Controller
{
    public function __invoke(Order $order)
    {
        $cars = Car::all();
        $users = User::all();
        return view('admin.orders.edit', compact('order', 'cars', 'users'));
    }
}
