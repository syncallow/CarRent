<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;


class DeleteController extends Controller
{
    public function __invoke(User $user)
    {
        $deleteUser = $user->delete();
        if ($deleteUser){
            return back()->with('status', 'User was deleted successfully!');
        }

        return back()->with('error', 'User was not deleted!');
    }

}
