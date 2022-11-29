<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hekmatinasser\Verta\Verta;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class VertaController extends Controller
{
    public function view()
    {
        $user = User::where('id', 1)->first();
        $date = $user->created_at;
//        $formatDate = Carbon::make($date)->format('Y-m-d H:i:s');
        //$bb = Verta::today();
        echo new Verta("+1 month");
        $vertaDate = new Verta($date);
        return view('date.verta', compact('vertaDate'));
    }
}
