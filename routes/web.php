<?php

use App\Models\Produit;
use App\Models\Categorie;
use App\Views\Composers\MultiComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductCotroller;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\MarqueController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Guest\GuestController;

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

View::composer(['*'], function ($view) {
    $categoriesSearchOverlay = Categorie::select('nom','image')->get();
    $produitsSearchOverlay = Produit::where('promotion', '>=', 15)->select('designation', 'prix', 'promotion')->limit(4)->get();
    $view->with('categoriesSearchOverlay', $categoriesSearchOverlay)->with('produitsSearchOverlay', $produitsSearchOverlay);
});

Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});

Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/shop/index', function () {
    return view('shop-pages.index');
});



Route::get('/shop/product', function () {
    return view('shop-item.index',);
});

Route::get('/shop/cart', function () {
    return view('shop-item.my-cart');
});

Route::get('/layout', [GuestController::class, 'layout'])->name('guest.layout');


Route::group([
    'prefix' => 'home', 
    ], function () {
    Route::get('/', [GuestController::class, 'home'])->name('guest.home');
    Route::get('/{categorie}', [GuestController::class, 'toCategorie'])->name('guest.toCategorie');
    Route::post('/chercher', [GuestController::class, 'chercherProduit'])->name('guest.chercherProduit');

    Route::group([
        'middleware' => 'auth',
        'prefix' => 'client',
    ], function () {
        Route::get('/cart', [ClientController::class, 'showMyCart'])->name('client-my-cart');
        Route::get('/checkout', [ClientController::class, 'Checkout'])->name('client.Checkout');
        Route::post('/confirme-checkout', [ClientController::class, 'ConfirmeCheckout'])->name('client.ConfirmeCheckout');
        Route::resource('/', ClientController::class);
        Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
    });
});



    Route::group([
        'middleware' => 'admin',
        'prefix' => 'admin',
    ], function () {
        // routes de l'admin
    });



// Route::resource('/product', ProductCotroller::class)->middleware('guest');


Route::get('/home-page', function () {
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
Route::Resource('/categorie', CategorieController::class);
Route::Resource('/produit', ProduitController::class);
Route::Resource('/fournisseur', FournisseurController::class);
Route::Resource('/marque', MarqueController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');Auth::routes();
Route::Resource('/user', UserController::class);
Auth::routes();
Auth::routes(['verify'=>true]);
