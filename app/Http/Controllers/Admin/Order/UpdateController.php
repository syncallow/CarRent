<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Order\UpdateRequest;
use App\Models\Order;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Order $order)
    {
        $data = $request->validated();

        $orderSelf = Order::where('car_id', $data['car_id'])->where('book_start_date', '<=', $data['book_end_date'])->where('book_end_date', '>=', $data['book_start_date'])->get();
        $isBooked = $orderSelf ? $orderSelf->count() : 0;
        $isOrderOld = $orderSelf->find($order->id);

        if($isBooked >= 1 && !$isOrderOld){
            return back()->with('error', 'This car is already rented on that dates'); // Проверяем если есть записи по аренде машины на выбранные числа, если есть то возвращаем назад с ошибкой
        }

        $order->update($data);
        return redirect()->route('admin.orders.show', compact('order'))->with('status','Order updated successfully!');
    }
}
