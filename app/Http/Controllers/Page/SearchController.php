<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Info;
use App\Models\Order;
use App\Models\Page;
use App\Models\Propose;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $info = Info::first();

        $data = $request->data;
        if (!$data){
            return redirect()->route('index');
        }
        $page = Page::whereid(1)->first();
        $propose = Propose::whereid(1)->first();
        $data['book_start_date'] = Carbon::parse($data['book_start_date'])->format('Y-m-d');
        $data['book_end_date'] = Carbon::parse($data['book_end_date'])->format('Y-m-d');
        $freeCars = Car::where('id','!=', $data['car_id'])->whereNotIn('id', Order::where('book_start_date', '<=', $data['book_end_date'])->where('book_end_date', '>=', $data['book_start_date'])->get('car_id'))->get();
        if ($freeCars->count() === 0){
            return redirect()->route('index')->with('error', 'All cars are rented on that dates. Please choose another dates.');
        }
        return view('pages.search', compact('info', 'data', 'freeCars', 'page', 'propose'));
    }
}
