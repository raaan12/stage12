<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SizeController;

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
Route::get('/product', 'App\Http\Controllers\ProductController@index')->name('products.index');

Route::get('/category', 'App\Http\Controllers\CategoryController@index')->name('categories.index');
Route::get('/commandes', 'App\Http\Controllers\CommandeController@index')->name('commandes.index');
Route::get('/message', 'App\Http\Controllers\MessageController@index')->name('messages.index');
Route::get('/employee', 'App\Http\Controllers\ProfileController@index')->name('employe.index');
Route::get('/color', 'App\Http\Controllers\ColorController@index')->name('colors.index');
Route::get('/size', 'App\Http\Controllers\SizeController@index')->name('sizes.index');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::match(['patch', 'get'], '/profile/{profile}', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/ProductCreate', 'App\Http\Controllers\ProductController@create')->name('products.create');
Route::post('store', 'App\Http\Controllers\ProductController@store')->name('products.store');
Route::get('show/{id}', 'App\Http\Controllers\ProductController@show')->name('products.details');
Route::get('edit/{id}', 'App\Http\Controllers\ProductController@edit')->name('products.edit');
Route::put('edit/{id}', 'App\Http\Controllers\ProductController@update')->name('products.update');
Route::delete('destroy/{id}', 'App\Http\Controllers\ProductController@destroy')->name('products.destroy');

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
