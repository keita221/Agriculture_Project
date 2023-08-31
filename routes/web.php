<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cultivateur/culture', function () {
    return view('/cultivateur/culture');
});

Route::get('register', [LoginController::class, 'redirectTo']);
Route::get('/show/{id}',[HomeController::class,'show'])->name('user.show');
Route::get('/destroy/{id}',[HomeController::class,'destroy'])->name('user.destroy');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
