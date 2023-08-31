<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CultureController;
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

Route::get('/cultivateur/culture',[CultureController::class,'index'])->name('culture.index');
Route::get('/cultivateur/ajout',[CultureController::class,'affiche'])->name('culture.affiche');
Route::post('/cultivateur/culture',[CultureController::class,'store'])->name('culture.store');

Route::get('register', [LoginController::class, 'redirectTo']);
Route::get('/show/{id}',[HomeController::class,'show'])->name('user.show');
Route::get('/destroy/{id}',[HomeController::class,'destroy'])->name('user.destroy');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
