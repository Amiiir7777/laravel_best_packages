<?php

namespace App\Http\Controllers;

class RecaptchaMathController extends Controller
{
    public function math()
    {
        return view('recaptcha-math/recaptcha');
    }

    public function refresh()
    {
        return response()->json(['captcha' => captcha_img()]);
    }
}
