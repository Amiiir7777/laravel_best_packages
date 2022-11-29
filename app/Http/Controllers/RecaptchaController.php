<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecaptchaController extends Controller
{
    public function recaptcha(Request $request)
    {
//        $request->validate($request, [
//            'g-recaptcha-response' => 'required|captcha',
//        ]);
        return view('recaptcha.recaptcha');
    }
}
