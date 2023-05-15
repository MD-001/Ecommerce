<?php

use Illuminate\Support\Facades\Route;

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
});

Auth::routes();

Route::get('/all-product', function () {
    return view('homepage.index');
});
Route::get('/show-product', function () {
    return view('shop-item.index');
});

Route::get('/dash-bord', function () {
    return view('admin.index');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
