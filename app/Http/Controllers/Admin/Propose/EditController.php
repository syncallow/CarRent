<?php

namespace App\Http\Controllers\Admin\Propose;

use App\Http\Controllers\Controller;
use App\Models\Propose;

class EditController extends Controller
{
    public function __invoke(Propose $propose)
    {
        return view('admin.propose.edit', compact('propose'));
    }
}
