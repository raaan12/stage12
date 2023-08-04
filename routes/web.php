<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SizeController;

use App\Http\Controllers\Auth\RegisteredUserController;


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
    return view('auth.login');
});



/*  Client part  */
Route::get('/clothes', 'App\Http\Controllers\ClientController@clothes')->name('client.clothes');
Route::get('/client', 'App\Http\Controllers\ClientController@index')->name('client.index');
Route::get('/accessories', 'App\Http\Controllers\ClientController@accessories')->name('client.accessories');
Route::get('/About Us', 'App\Http\Controllers\ClientController@about')->name('client.aboutus');
Route::get('/contact', 'App\Http\Controllers\ClientController@contact')->name('client.contact');

Route::get('cart', 'App\Http\Controllers\ProductController@cart')->name('cart');
Route::get('add-to-cart/{id}','App\Http\Controllers\ProductController@addToCart')->name('add_to_cart');
Route::patch('update-cart','App\Http\Controllers\ProductController@updatecart')->name('update_cart');
Route::delete('remove-from-cart','App\Http\Controllers\ProductController@removecart')->name('remove_from_cart');
Route::get('/products/{id}/dertails', 'App\Http\Controllers\ClientController@show')->name('product.detail');


// routes/web.php

Route::get('/order/create', 'App\Http\Controllers\CommandeController@create')->name('client.confirmation');
Route::post('/order', 'App\Http\Controllers\CommandeController@store')->name('store_order');




/*  Admin part  */
Route::get('/product', 'App\Http\Controllers\ProductController@index')->name('products.index');
Route::get('/category', 'App\Http\Controllers\CategoryController@index')->name('categories.index');
Route::get('/commandes', 'App\Http\Controllers\CommandeController@index')->name('commandes.index');
Route::get('/message', 'App\Http\Controllers\MessageController@index')->name('messages.index');
Route::get('/employee', 'App\Http\Controllers\ProfileController@index')->name('employe.index');
Route::get('/employeCreate', 'App\Http\Controllers\ProfileController@create')->name('employe.create');
Route::post('employeStore', 'App\Http\Controllers\ProfileController@store')->name('employe.store');
Route::get('/color', 'App\Http\Controllers\ColorController@index')->name('colors.index');
Route::get('/size', 'App\Http\Controllers\SizeController@index')->name('sizes.index');



Route::middleware('auth')->group(function () {
    Route::get('/profile/{profile}', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/{user}', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [App\Http\Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/ProductCreate', 'App\Http\Controllers\ProductController@create')->name('products.create');
Route::post('store', 'App\Http\Controllers\ProductController@store')->name('products.store');
Route::get('/products/{id}/AddSize', 'App\Http\Controllers\ProductSizeController@edit')->name('products.addSize');
Route::put('/products/{id}', 'App\Http\Controllers\ProductController@update')->name('products.update');
Route::delete('destroy/{id}', 'App\Http\Controllers\ProductController@destroy')->name('products.destroy');
Route::get('/products/{id}/details', 'App\Http\Controllers\ProductController@show')->name('products.details');
Route::get('/products/{id}/edit', 'App\Http\Controllers\ProductController@edit')->name('products.edit');

Route::put('/products/{id}/stock', 'App\Http\Controllers\ProductSizeController@update')->name('productsStock.update');
Route::put('/products/{id}/s', 'App\Http\Controllers\ProductSizeController@store')->name('productsStock.store');




Route::get('/ColorCreate', 'App\Http\Controllers\ColorController@create')->name('colors.create');
Route::post('colorStore', 'App\Http\Controllers\ColorController@store')->name('colors.store');
Route::get('colorShow/{id}', 'App\Http\Controllers\ColorController@show')->name('colors.details');
Route::get('colorEdit/{id}', 'App\Http\Controllers\ColorController@edit')->name('colors.edit');
Route::put('colorEdit/{id}', 'App\Http\Controllers\ColorController@update')->name('colors.update');
Route::delete('colorDestroy/{id}', 'App\Http\Controllers\ColorController@destroy')->name('colors.destroy');

Route::get('/SizeCreate', 'App\Http\Controllers\SizeController@create')->name('sizes.create');
Route::post('SizeStore', 'App\Http\Controllers\SizeController@store')->name('sizes.store');
Route::get('SizeShow/{id}', 'App\Http\Controllers\SizeController@show')->name('sizes.details');
Route::get('SizeEdit/{id}', 'App\Http\Controllers\SizeController@edit')->name('sizes.edit');
Route::put('/SizeEdit/{id}', 'App\Http\Controllers\SizeController@update')->name('SizeEdit');
Route::delete('SizeDestroy/{id}', 'App\Http\Controllers\SizeController@destroy')->name('sizes.destroy');

Route::get('/CategoryCreate', 'App\Http\Controllers\CategoryController@create')->name('categories.create');
Route::post('CategoryStore', 'App\Http\Controllers\CategoryController@store')->name('categories.store');
Route::get('CategoryShow/{id}', 'App\Http\Controllers\CategoryController@show')->name('categories.details');
Route::get('CategoryEdit/{id}', 'App\Http\Controllers\CategoryController@edit')->name('categories.edit');
Route::put('/CategoryEdit/{id}', 'App\Http\Controllers\CategoryController@update')->name('categories.update');
Route::delete('CategoryDestroy/{id}', 'App\Http\Controllers\CategoryController@destroy')->name('categories.destroy');

Route::get('show/{id}', 'App\Http\Controllers\CommandeController@show')->name('commandes.details');
Route::get('edit/{id}', 'App\Http\Controllers\CommandeController@edit')->name('commandes.edit');
Route::put('edit/{id}', 'App\Http\Controllers\CommandeController@update')->name('commandes.update');
