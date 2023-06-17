<?php

use App\Models\Produit;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductCotroller;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CartController;

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


Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/', function () {
    // return view('layouts.app');
    $produits = Produit::all();
    return view('homepage.index', ['produits'=>$produits]);
});

Route::get('/shop/index', function () {
    return view('shop-pages.index');
});

Route::get('/shop/ajouter', function () {
    return view('shop-pages.productsByCategorie');
})->name('shop-add');

Route::get('/shop/product', function () {
    return view('shop-item.index');
});

Route::group([
    'middleware' => 'guest', 
    'prefix' => 'visiteur', 
    'as' => '.guests'
    ], function () {
        Route::get("/home", []);
    
    Route::group([
        'middleware' => 'auth', 
        'prefix' => 'client', 
        'as' => '.client'
        ], function () {
        // routes des clients
        
        
        Route::group([
            'middleware' => 'admin', 
            'prefix' => 'admin', 
            'as' => '.admin'
            ], function () {
            // routes de l'admin
        });
    });
});


Route::resource('/product', ProductCotroller::class)->middleware('guest');
Route::get('/client-my-cart', [ClientController::class, 'showMyCart'])->name('client-my-cart');
Route::get('/client-checkout', [ClientController::class, 'Checkout'])->name('client.Checkout');
Route::post('/client-confirme-checkout', [ClientController::class, 'ConfirmeCheckout'])->name('client.ConfirmeCheckout');
Route::resource('/client', ClientController::class);
Route::post('/cart', [CartController::class, 'store'])->name('cart.store');

Route::get('/home-page', function () {
    return view('homepage.index');
});

Route::get('/show-product', function () {
    return view('shop-item.index');
});

Route::get('/dashboard', function () {
    return view('admin.index');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
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
Route::Resource('/categorie', CategorieController::class);
Route::Resource('/produit', ProduitController::class);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');Auth::routes();

Auth::routes();
Auth::routes(['verify'=>true]);