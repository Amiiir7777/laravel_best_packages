<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Application;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MorilogJalaliController;
use App\Http\Controllers\RecaptchaController;
use App\Http\Controllers\RecaptchaMathController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\VertaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->middleware('verified');

// Socialite package(oauth authentication)
Route::get('google/redirect', [GoogleController::class, 'redirect'])->name('google.redirect');
Route::get('google/callback', [GoogleController::class, 'callback'])->name('google.callback');
Route::view('google', 'oauth.google');

// Intervention image package
Route::get('image', [ImageController::class, 'index'])->name('image.index');
Route::post('image', [ImageController::class, 'imageStore'])->name('image.store');

// Role & Permissions package
Route::get('roles', [RoleController::class, 'index'])->name('roles.index');
Route::get('roles/create', [RoleController::class, 'create'])->name('roles.create');
Route::post('roles', [RoleController::class, 'store'])->name('roles.store');
Route::get('roles/give', [RoleController::class, 'giveRole'])->name('roles.give');

// Excel package
Route::get('excel/export', [ExcelController::class, 'export'])->name('excel.export');
Route::get('excel/import', [ExcelController::class, 'import'])->name('excel.import');

// Google recaptcha package
Route::get('google/recaptcha-google', [RecaptchaController::class, 'recaptcha'])->name('recaptcha.recaptcha');

// Recaptcha math package
Route::get('recaptcha-math/recaptcha', [RecaptchaMathController::class, 'math'])->name('recaptcha-math.recaptcha');
Route::get('recaptcha-math/recaptcha/refresh', [RecaptchaMathController::class, 'refresh'])->name('recaptcha-math.refresh');

// Data & Time package(verta & morilogJalali)
Route::group(['prefix' => 'date'], function () {
    Route::get('verta', [VertaController::class, 'view'])->name('date.verta');
    Route::get('morilog', [MorilogJalaliController::class, 'view'])->name('date.morlog');
});

//Laravel seo package
Route::get('seo', [SeoController::class, 'index'])->name('seo.index');

// Laravel ui package
Auth::routes(['verify' => true]);
Auth::routes(['verify' => true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
