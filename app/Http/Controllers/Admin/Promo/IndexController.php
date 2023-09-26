<?php

namespace App\Http\Controllers\Admin\Promo;

use App\Http\Controllers\Controller;
use App\Models\Promo;

class IndexController extends Controller
{
    public function __invoke()
    {
        $promo = Promo::find(1);
        return view('admin.promo.index', compact('promo'));
    }
}
