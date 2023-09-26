<?php

namespace App\Http\Controllers\Admin\Promo;

use App\Http\Controllers\Controller;
use App\Models\Promo;

class EditController extends Controller
{
    public function __invoke(Promo $promo)
    {
        return view('admin.promo.edit', compact('promo'));
    }
}
