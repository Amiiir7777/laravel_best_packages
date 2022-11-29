<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function index()
    {
        return view('oauth.google');
    }

    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {

        try {
            $google = Socialite::driver('google')->user();
            //$user = User::where('email', $google->email)->first();
            $user = User::query()->where('email', $google->email)->first();

            if ($user) {
                //login user
                Auth::loginUsingId($user->id);
                return redirect('google')->with('success', 'ورود با موفقیت انجام شد');
            }

            //create user
            User::query()->create([
                'name' => $google->name,
                'email' => $google->email,
                'password' => bcrypt(Str::random(8))
            ]);
            return redirect('google')->with('congratulations', 'تبریک ثبت نام شما با موفقیت انجام شد');

        } catch (\Exception $e) {
            return redirect('google')->with('error', 'مشکلی در ورود پیش آمده است');
        }

    }
}
