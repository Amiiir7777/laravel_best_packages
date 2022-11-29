<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MorilogJalaliController extends Controller
{
    public function view()
    {
        $user = User::where('id', 1)->first();
        $date = $user->created_at;
        $result = jdate($date);
        return view('date.morilogJalali', compact('result'));
    }
}
