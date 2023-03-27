<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowController;

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
    return view('homepage');
});

Route::get('/', function () {
    return view('homepage');
});

Route::get('/', function () {
    return view('homepage');
});

Route::get('/', function () {
    return view('homepage');
});

Route::get('/', function () {
    return view('homepage');
});

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::get('/homepage', [App\Http\Controllers\HomepageController::class, 'index'])->name('homepage');
Route::get('/home', [App\Http\Controllers\HomepageController::class, 'index'])->name('home');
Route::get('/aboutus', [App\Http\Controllers\AboutusController::class, 'index'])->name('aboutus');

Route::get('/products', [App\Http\Controllers\ProductsController::class, 'index'])->name('products');
Route::get('/category1', [App\Http\Controllers\Category1Controller::class, 'index'])->name('category1');
Route::get('/category2', [App\Http\Controllers\Category2Controller::class, 'index'])->name('category2');
Route::get('/category3', [App\Http\Controllers\Category3Controller::class, 'index'])->name('category3');
Route::get('/category4', [App\Http\Controllers\Category4Controller::class, 'index'])->name('category4');
Route::get('/category5', [App\Http\Controllers\Category5Controller::class, 'index'])->name('category5');
// Route::get('/basket', [App\Http\Controllers\BasketController::class, 'index'])->name('basket');

// Basket
// Route::post('/add-to-basket/{id}', [BasketController::class, 'addToBasket'])->name('addToBasket');
Route::get('/category1', [App\Http\Controllers\ShowController::class, 'show']);
Route::post('/addbasket/{id}',[App\Http\Controllers\HomeController::class, 'addbasket']);
Route::get('/basket',[App\Http\Controllers\HomeController::class, 'showbasket']);
Route::get('/delete/{id}',[App\Http\Controllers\HomeController::class, 'deletebasket']);

Route::get('/contactus', [App\Http\Controllers\ContactUsController::class, 'index'])->name('contactus');
