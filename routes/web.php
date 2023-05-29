<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductCotroller;

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
    // return view('homepage.index');

    return redirect()->route('product.index');
});


Route::middleware(['guest'])->group(function () {
    // routes des visiteurs
    Route::middleware(['auth'])->group(function () {
        // routes des clients
        Route::middleware(['admin'])->group(function () {
            // routes de l'admin
        });
    });
});


Route::resource('/product', ProductCotroller::class);

Route::get('/all-product', function () {
    return view('homepage.index');
});
Route::get('/show-product', function () {
    return view('shop-item.index');
});

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
