<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;

class DeleteController extends Controller
{
    public function __invoke(Order $order)
    {
        $order->delete();
        return redirect()->route('admin.orders.index')->with('status', 'Order deleted successfully!');
    }
}
