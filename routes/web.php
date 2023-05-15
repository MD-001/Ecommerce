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

<<<<<<< HEAD
Route::get('/dashboard', function () {
    return view('admin.index');
});

// Route::get('/add-product', function () {
//     return view('admin.categorie');
// });

Route::get('/categories', function () {
    return view('admin.liste-categorie');
});

Route::get('/add-categorie', function () {
    return view('admin.ajouter-categorie');
});
=======
Route::get('/dash-bord', function () {
    return view('admin.index');
});

>>>>>>> a3be46eeaba44f8fa98da61d6d00e1efb66b7954

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
