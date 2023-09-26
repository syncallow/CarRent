<?php

namespace App\Http\Controllers\CarCheck;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarAvailabilityCheck\CarAvailabilityCheckRequest;
use App\Models\Order;
use Carbon\Carbon;

class CarAvailabilityCheck extends Controller
{
    public function __invoke(CarAvailabilityCheckRequest $request)
    {
        $data = $request->validated();
        if (!$data){
            return redirect()->route('index');
        }
        $dateStart =  Carbon::parse($data['book_start_date'])->format('Y-m-d');
        $dateEnd =  Carbon::parse($data['book_end_date'])->format('Y-m-d');
        $bookedCars = Order::where('car_id', $data['car_id'])->where('book_start_date', '<=', $dateEnd)->where('book_end_date', '>=', $dateStart)->get('car_id'); //Подсчитываем забронированые машины если такие есть
        $isBooked = $bookedCars->count();

        if($isBooked >= 1){
            return redirect()->route('search',compact( 'data'))->with('error', 'This car is already rented on that dates'); // Проверяем если есть записи по аренде машины на выбранные числа, если есть то возвращаем назад с ошибкой
        }

        return redirect()->route('book',compact('data'))->with('status', 'Your car is available on that dates');
    }
}
