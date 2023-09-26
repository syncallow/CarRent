<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Order\StoreRequest;
use App\Models\Order;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        Order::create($data);
        return redirect()->route('admin.orders.index')->with('status','New order created successfully!');
    }
}
