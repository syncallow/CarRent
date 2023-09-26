<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Order\CheckCarAvailabilityRequest;
use App\Models\Car;
use App\Models\Order;
use DateTime;

class CheckCarAvailabilityController extends Controller
{
    public function __invoke(CheckCarAvailabilityRequest $request)
    {
        $data = $request->validated();

        $data['days'] = (new DateTime($data['book_end_date']))->diff(new DateTime($data['book_start_date']))->days; //Рассчитываем дни между датами, вместо DateTime лучше было бы юзать Carbon но я завтыкал))


        $isBooked = Order::where('car_id', $data['car_id'])->where('book_start_date', '<=', $data['book_end_date'])->where('book_end_date', '>=', $data['book_start_date'])->count(); //Подсчитываем забронированые машины если такие есть

        if($isBooked >= 1){
            return back()->with('error', 'This car is already rented on that dates'); // Проверяем если есть записи по аренде машины на выбранные числа, если есть то возвращаем назад с ошибкой
        }
        $car = Car::where('id', $data['car_id'])->first(); // Выбираем машину по айди

        $data['total_price'] = $car->price * $data['days']; // Получаем общую стоимость аренды "кол-во дней аренды умножаем на цену (price) машины за день"

        return redirect()->route('admin.orders.create', compact('data', 'car'))->with('status', 'This car is available for rent on that dates');
    }
}
