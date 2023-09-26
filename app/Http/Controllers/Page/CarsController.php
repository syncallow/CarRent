<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Info;
use App\Models\Page;
use App\Models\Propose;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function __invoke()
    {
        $info = Info::first();
        $page = Page::whereid(2)->first();
        $cars = Car::paginate(6);
        $propose = Propose::first();
        return view('pages.cars', compact('info', 'page', 'cars','propose'));
    }
}
