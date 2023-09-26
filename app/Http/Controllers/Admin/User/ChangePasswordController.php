<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class ChangePasswordController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with('error', "Old password doesn't match");
        }

        User::whereId(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);

        return back()->with("status", "Password changed successfully!");
    }
}
