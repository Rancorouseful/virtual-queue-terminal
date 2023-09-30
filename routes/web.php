<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::name('user.')->group(function (){
    Route::view('/home', 'home')->middleware('auth')->name('home');

    Route::get('/login', [\App\Http\Controllers\AuthenticateController::class, 'create'])->middleware('guest')->name('login');

    Route::post('/login', [\App\Http\Controllers\AuthenticateController::class, 'store'])->middleware('guest');
    Route::get('/logout', [\App\Http\Controllers\AuthenticateController::class, 'destroy'])->middleware('auth')->name('logout');

    Route::get('/registration', [\App\Http\Controllers\RegisterController::class, 'create'])->middleware('guest')->name('register');
    Route::post('/registration', [\App\Http\Controllers\RegisterController::class, 'store'])->middleware('guest');

});

Route::get('/test', function () {
    echo \Psy\Util\Json::encode(['time' => date('Y.m.d H:m:s')]);
});
Route::get('/', [IndexController::class, 'index']);
