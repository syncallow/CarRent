<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Order\StoreRequest;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['book_start_date'] = Carbon::parse($data['book_start_date'])->format('Y-m-d');
        $data['book_end_date'] = Carbon::parse($data['book_end_date'])->format('Y-m-d');

        $order = Order::create($data);
        if ($order){
            $order->notify(new \App\Notifications\NewOrder($order));
            return redirect()->route('index')->with('status','Car was rented successfully!');
        } else {
            return redirect()->route('index')->with('error','Something went wrong. Please try again!');
        }

    }
}
