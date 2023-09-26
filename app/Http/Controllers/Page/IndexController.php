<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Feature;
use App\Models\Info;
use App\Models\Page;
use App\Models\Promo;
use App\Models\Propose;
use App\Models\Step;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $info = Info::first();
        $page = Page::whereid(1)->first();
        $cars = Car::all();
        $steps = Step::all();
        $propose = Propose::first();
        $promo = Promo::first();
        $features = Feature::all();

        return view('pages.index', compact('info','page', 'cars', 'steps', 'propose', 'promo', 'features'));
    }
}
