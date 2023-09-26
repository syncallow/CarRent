<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Info;
use App\Models\Page;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $request->data;
        $car = Car::whereId($data['car_id'])->first();
        $info = Info::first();
        $page = Page::whereid(1)->first();
        $data['days'] = Carbon::parse($data['book_start_date'])->diffInDays(Carbon::parse($data['book_end_date']));
        $data['total_price'] = $car->price * $data['days'];
        return view('pages.book', compact('info', 'page','data', 'car'));
    }
}
