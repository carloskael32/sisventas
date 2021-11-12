<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\SessionsController;
use Illuminate\Routing\RouteGroup;

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
    return view('home');
})->middleware('auth');


Route::get('/home', function () {
    return view('home');
})->middleware('auth');


//usuario administrador
//login
Route::get('/login', [SessionsController::class, 'create'])->name('login.index');
Route::post('/login', [SessionsController::class, 'store'])->name('login.store');
Route::post('/logout', [SessionsController::class, 'destroy'])->name('login.destroy')->middleware('auth');

//registro
Route::get('/register', [RegisterController::class, 'create'])->name('register.index')->middleware('auth');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store')->middleware('auth');
Route::get('/index',[RegisterController::class,'index'])->name('admin.index')->middleware('auth');

//////