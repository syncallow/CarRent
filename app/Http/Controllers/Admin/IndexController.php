<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Order;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::latest()->limit(5)->get();
        $orders = Order::all();
        $cars = Car::all();
        return view('admin.index', compact('posts', 'orders', 'cars'));
    }
}
