<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke(Car $car, Request $request)
    {
        if (!$request->data){
            return redirect()->route('admin.index');
        }
        $data = $request->data;

        $users = User::all();

        return view('admin.orders.create', compact('users', 'car', 'data'));
    }
}
